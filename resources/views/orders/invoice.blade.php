<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ getLanguageDirection() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __(config('app.name')) }} — {{ __('index.Invoice') }} #{{ $order->id }}</title>
    @vite('resources/js/app.js')
    <style>
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; }
            .page { box-shadow: none !important; margin: 0 !important; border-radius: 0 !important; }
        }
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f3f4f6; color: #1e293b; }
        .page { max-width: 800px; margin: 32px auto; background: white; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.10); padding: 48px 56px; }
        .header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 36px; border-bottom: 3px solid #003581; padding-bottom: 24px; }
        .logo { height: 56px; object-fit: contain; }
        .invoice-meta { text-align: right; }
        .invoice-meta h1 { font-size: 28px; font-weight: 900; color: #003581; margin: 0 0 4px; text-transform: uppercase; letter-spacing: 2px; }
        .invoice-meta p { margin: 2px 0; font-size: 13px; color: #64748b; }
        .section-title { font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #003581; margin-bottom: 10px; }
        .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 28px; }
        .info-box { background: #f8fafc; border-radius: 8px; padding: 16px 20px; }
        .info-row { display: flex; justify-content: space-between; align-items: center; padding: 6px 0; border-bottom: 1px solid #f1f5f9; font-size: 13px; }
        .info-row:last-child { border-bottom: none; }
        .info-row .label { color: #64748b; }
        .info-row .value { font-weight: 600; text-align: right; }
        .items-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; font-size: 13px; }
        .items-table thead tr { background: #003581; color: white; }
        .items-table thead th { padding: 10px 14px; text-align: left; font-weight: 600; }
        .items-table tbody tr:nth-child(even) { background: #f8fafc; }
        .items-table tbody td { padding: 10px 14px; border-bottom: 1px solid #e2e8f0; }
        .totals { margin-left: auto; width: 300px; margin-bottom: 28px; }
        .total-row { display: flex; justify-content: space-between; padding: 6px 0; font-size: 13px; border-bottom: 1px solid #f1f5f9; }
        .total-row.grand { font-weight: 900; font-size: 16px; color: #003581; border-top: 2px solid #003581; border-bottom: none; padding-top: 10px; margin-top: 4px; }
        .badge { display: inline-block; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; text-transform: uppercase; }
        .badge-pending  { background: #fef3c7; color: #92400e; }
        .badge-approved { background: #d1fae5; color: #065f46; }
        .badge-rejected { background: #fee2e2; color: #991b1b; }
        .footer { text-align: center; margin-top: 36px; padding-top: 18px; border-top: 1px solid #e2e8f0; font-size: 11px; color: #94a3b8; }
        .print-btn { display: flex; gap: 12px; justify-content: center; margin-bottom: 24px; }
        [dir="rtl"] .invoice-meta { text-align: left; }
        [dir="rtl"] .info-row .value { text-align: left; }
    </style>
</head>
<body>

    {{-- Print / Back controls (hidden when printing) --}}
    <div class="print-btn no-print">
        @if ($order->partner)
        <label class="flex items-center gap-2 cursor-pointer select-none bg-white border border-gray-300 rounded-lg px-4 py-2 font-semibold text-sm text-gray-700 hover:bg-gray-50 transition">
            <input type="checkbox" id="toggle-partner" checked class="w-4 h-4 accent-yellow-500">
            {{ __('index.Show partner details') }}
        </label>
        @endif
        <button onclick="window.print()"
            class="bg-blue-950 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-800 transition flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a1 1 0 001-1v-5H8v5a1 1 0 001 1zm1-9V5a1 1 0 011-1h2a1 1 0 011 1v3"/></svg>
            {{ __('index.Print') }}
        </button>
        <a href="{{ route('orders.show', $order->id) }}"
            class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg font-bold hover:bg-gray-300 transition flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            {{ __('index.Back') }}
        </a>
    </div>

    <div class="page">

        {{-- ── Header ── --}}
        <div class="header">
            <img src="{{ Vite::asset('resources/images/logo-d.png') }}"
                 alt="{{ config('app.name') }}" class="logo">
            <div class="invoice-meta">
                <h1>{{ __('index.Invoice') }}</h1>
                <p><strong>#{{ $order->id }}</strong></p>
                <p>{{ __('index.Order date') }}: {{ $order->created_at->format('Y-m-d  H:i') }}</p>
                <p>
                    <span class="badge badge-{{ $order->payment_status }}">
                        {{ __('index.' . $order->payment_status) }}
                    </span>
                </p>
            </div>
        </div>

        {{-- ── Client + Trip ── --}}
        <div class="two-col">

            {{-- Client --}}
            <div class="info-box">
                <div class="section-title">{{ __('index.Client') }}</div>
                <div class="info-row">
                    <span class="label">{{ __('index.Name') }}</span>
                    <span class="value">{{ $order->user->first_name }} {{ $order->user->last_name }}</span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Email') }}</span>
                    <span class="value">{{ $order->user->email }}</span>
                </div>
                @if ($order->user->phone)
                <div class="info-row">
                    <span class="label">{{ __('index.Phone') }}</span>
                    <span class="value">{{ $order->user->phone }}</span>
                </div>
                @endif
                @if ($order->user->city)
                <div class="info-row">
                    <span class="label">{{ __('index.City') }}</span>
                    <span class="value">{{ $order->user->city }}</span>
                </div>
                @endif
            </div>

            {{-- Trip --}}
            <div class="info-box">
                <div class="section-title">{{ __('index.Trip Details') }}</div>
                <div class="info-row">
                    <span class="label">{{ __('index.Flight') }}</span>
                    <span class="value">{{ $order->flight()->title }}</span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Going date') }}</span>
                    <span class="value">{{ $order->flight()->going_date }}</span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Return date') }}</span>
                    <span class="value">{{ $order->flight()->return_date }}</span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Room') }}</span>
                    <span class="value">{{ $order->room()->name }}</span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Mecca Hotel') }}</span>
                    <span class="value">{{ $order->program()->hotelMecca->name }}</span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Medina Hotel') }}</span>
                    <span class="value">{{ $order->program()->hotelMedina->name }}</span>
                </div>
            </div>
        </div>

        {{-- ── Line items ── --}}
        <table class="items-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('index.Description') }}</th>
                    <th style="text-align:center">{{ __('index.Pilgrims count') }}</th>
                    <th style="text-align:right">{{ __('index.Price per person') }}</th>
                    <th style="text-align:right">{{ __('index.Total') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        {{ $order->program()->name() }}<br>
                        <small style="color:#64748b">
                            {{ $order->flight()->title }} &bull; {{ $order->room()->name }}
                            @if($order->program()->have_meals) &bull; {{ __('index.Meals included') }}@endif
                        </small>
                    </td>
                    <td style="text-align:center">{{ $order->pilgrims_count }}</td>
                    <td style="text-align:right">{{ money($order->programPrice->price) }} {{ __('index.dh') }}</td>
                    <td style="text-align:right">{{ money($order->programPrice->price * $order->pilgrims_count) }} {{ __('index.dh') }}</td>
                </tr>
            </tbody>
        </table>

        {{-- ── Totals ── --}}
        <div class="totals">
            @if ($order->programPrice->old_price && $order->programPrice->old_price > $order->programPrice->price)
            <div class="total-row">
                <span>{{ __('index.Original price') }}</span>
                <span style="text-decoration:line-through;color:#94a3b8">
                    {{ money($order->programPrice->old_price * $order->pilgrims_count) }} {{ __('index.dh') }}
                </span>
            </div>
            @endif
            <div class="total-row grand">
                <span>{{ __('index.Total Price') }}</span>
                <span>{{ money($order->total_price) }} {{ __('index.dh') }}</span>
            </div>
        </div>

        {{-- ── Payment & Order status ── --}}
        <div class="two-col">
            <div class="info-box">
                <div class="section-title">{{ __('index.Payment') }}</div>
                <div class="info-row">
                    <span class="label">{{ __('index.Payment method') }}</span>
                    <span class="value">{{ __('index.' . $order->payment_method) }}</span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Payment status') }}</span>
                    <span class="value">
                        <span class="badge badge-{{ $order->payment_status }}">{{ __('index.' . $order->payment_status) }}</span>
                    </span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Order status') }}</span>
                    <span class="value">
                        <span class="badge badge-{{ $order->status }}">{{ __('index.' . $order->status) }}</span>
                    </span>
                </div>
            </div>

            {{-- Partner (if any) --}}
            @if ($order->partner)
            <div id="partner-section" class="info-box" style="border-left: 3px solid #eab308;">
                <div class="section-title" style="color:#b45309">{{ __('index.Partner') }}</div>
                <div class="info-row">
                    <span class="label">{{ __('index.Referral code') }}</span>
                    <span class="value" style="font-family:monospace;letter-spacing:2px">{{ $order->partner->referral_code }}</span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Name') }}</span>
                    <span class="value">{{ $order->partner->name }}</span>
                </div>
                <div class="info-row">
                    <span class="label">{{ __('index.Commission') }}</span>
                    <span class="value">{{ money($order->commission_amount) }} {{ __('index.dh') }} ({{ $order->partner->commission_rate }}%)</span>
                </div>
            </div>
            @else
            <div></div>
            @endif
        </div>

        {{-- ── Footer ── --}}
        <div class="footer">
            <p>{{ __(config('app.name')) }} &mdash; {{ config('app.url') }}</p>
            <p>{{ __('index.Thank you for booking with us') }}</p>
            <p style="margin-top:8px;font-size:10px;color:#cbd5e1">
                {{ __('index.Invoice generated on') }} {{ now()->format('Y-m-d H:i') }}
            </p>
        </div>

    </div>

    <script>
        const togglePartner = document.getElementById('toggle-partner');
        if (togglePartner) {
            togglePartner.addEventListener('change', function () {
                document.getElementById('partner-section').style.display = this.checked ? '' : 'none';
            });
        }
    </script>

</body>
</html>
