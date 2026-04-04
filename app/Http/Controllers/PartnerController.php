<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\User;
use App\Mail\PartnerApproved;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PartnerController extends Controller
{
    public function index()
    {
        return view('partners', [
            'name' => __('index.Partners'),
            'partners' => Partner::orderByDesc('id')->get(),
        ]);
    }

    public function show(Partner $partner)
    {
        return view('show-partner', [
            'name' => __('index.Partner'),
            'partner' => $partner->load(['orders', 'user']),
        ]);
    }

    public function approve(Partner $partner)
    {
        do {
            $code = 'UMR-' . strtoupper(Str::random(6));
        } while (Partner::where('referral_code', $code)->exists());

        $plainPassword = null;
        $user = User::where('email', $partner->email)->first();
        if (!$user) {
            $plainPassword = Str::random(12);
            $user = User::create([
                'name'       => $partner->name,
                'first_name' => $partner->name,
                'email'      => $partner->email,
                'phone'      => $partner->phone ?? '',
                'role'       => 'partner',
                'password'   => Hash::make($plainPassword),
            ]);
        } elseif ($user->role !== 'partner') {
            $user->update(['role' => 'partner']);
        }

        $partner->update([
            'status'        => 'approved',
            'referral_code' => $code,
            'user_id'       => $user->id,
        ]);

        Mail::to($partner->email)->send(new PartnerApproved($partner->fresh(), $plainPassword ?? ''));

        return redirect()->route('partners.show', $partner->id)
            ->with('success', __('index.Partner approved'));
    }

    public function reject(Partner $partner)
    {
        $partner->update(['status' => 'rejected']);

        return redirect()->route('partners')
            ->with('success', __('index.Partner rejected'));
    }

    public function update(Partner $partner, Request $request)
    {
        $request->validate([
            'commission_rate' => 'required|numeric|min:0|max:100',
            'notes'           => 'nullable|string|max:1000',
        ]);

        $partner->update([
            'commission_rate' => $request->commission_rate,
            'notes'           => $request->notes,
        ]);

        return redirect()->back()->with('success', __('index.Partner updated'));
    }

    public function dashboard()
    {
        $user    = auth()->user();
        $partner = Partner::where('user_id', $user->id)->where('status', 'approved')->firstOrFail();

        return view('partner-dashboard', [
            'partner' => $partner->load('orders'),
        ]);
    }
}
