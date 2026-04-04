<x-app-layout :name=$name>
    <main class="flex-1 flex flex-col gap-6">

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="flex items-center gap-3">
            <a href="{{ route('partners') }}" class="btn btn-sm btn-ghost">← {{ __('index.Back') }}</a>
            <h2 class="text-xl font-bold">{{ $partner->name }}</h2>
            @if ($partner->status === 'pending')
                <a href="{{ route('partners.approve', $partner->id) }}" class="btn btn-sm btn-success ms-auto">{{ __('index.Approve') }}</a>
                <a href="{{ route('partners.reject', $partner->id) }}" class="btn btn-sm btn-error">{{ __('index.Reject') }}</a>
            @else
                <span class="badge {{ getStatusBg($partner->status) }} ms-auto">{{ __('index.' . $partner->status) }}</span>
            @endif
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- Partner Details --}}
            <div class="bg-white rounded-xl shadow-lg p-6 col-span-2">
                <h3 class="font-bold text-lg mb-4 border-b pb-2">{{ __('index.Partner') }}</h3>
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <span class="text-gray-500 text-sm block">{{ __('index.full name') }}</span>
                        <span class="font-semibold">{{ $partner->name }}</span>
                    </div>
                    <div>
                        <span class="text-gray-500 text-sm block">{{ __('index.Company name') }}</span>
                        <span class="font-semibold">{{ $partner->company_name ?? '—' }}</span>
                    </div>
                    <div>
                        <span class="text-gray-500 text-sm block">{{ __('index.email') }}</span>
                        <span class="font-semibold">{{ $partner->email }}</span>
                    </div>
                    <div>
                        <span class="text-gray-500 text-sm block">{{ __('index.phone') }}</span>
                        <span class="font-semibold">{{ $partner->phone }}</span>
                    </div>
                    @if ($partner->referral_code)
                    <div>
                        <span class="text-gray-500 text-sm block">{{ __('index.Referral code') }}</span>
                        <span class="badge badge-outline font-mono text-base px-3 py-1">{{ $partner->referral_code }}</span>
                    </div>
                    @endif
                    <div>
                        <span class="text-gray-500 text-sm block">{{ __('index.Referred orders') }}</span>
                        <span class="font-semibold">{{ $partner->orders->count() }}</span>
                    </div>
                    <div>
                        <span class="text-gray-500 text-sm block">{{ __('index.Total commissions') }}</span>
                        <span class="font-semibold text-green-600">{{ money($partner->totalCommissions()) }} {{ __('index.dh') }}</span>
                    </div>
                </div>
                @if ($partner->motivation)
                    <div class="mt-4">
                        <span class="text-gray-500 text-sm block mb-1">{{ __('index.Motivation') }}</span>
                        <p class="bg-gray-50 rounded-lg p-3 text-sm">{{ $partner->motivation }}</p>
                    </div>
                @endif
            </div>

            {{-- Update Commission + Notes --}}
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="font-bold text-lg mb-4 border-b pb-2">{{ __('index.Commission rate') }}</h3>
                <form action="{{ route('partners.update', $partner->id) }}" method="POST" class="flex flex-col gap-3">
                    @csrf
                    <label class="input input-bordered flex items-center gap-2">
                        {{ __('index.Commission rate') }} (%):
                        <input type="number" name="commission_rate" step="0.01" min="0" max="100"
                            value="{{ old('commission_rate', $partner->commission_rate) }}"
                            class="grow border-none focus:shadow-none shadow-none" required />
                    </label>
                    @error('commission_rate') <span class="text-error text-xs">{{ $message }}</span> @enderror
                    <label class="form-control">
                        <div class="label"><span class="label-text">{{ __('index.Notes') }}</span></div>
                        <textarea name="notes" rows="3" class="textarea textarea-bordered">{{ old('notes', $partner->notes) }}</textarea>
                    </label>
                    <button type="submit" class="btn btn-primary bg-blue-950 border-none">{{ __('index.Save') }}</button>
                </form>
            </div>
        </div>

        {{-- Referred Orders --}}
        @if ($partner->orders->count())
        <div class="bg-white rounded-xl shadow-lg px-3 py-3">
            <h3 class="font-bold text-lg mb-3 px-3 pt-3">{{ __('index.Referred orders') }}</h3>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('index.Client') }}</th>
                            <th>{{ __('index.Total Price') }}</th>
                            <th>{{ __('index.Commission amount') }}</th>
                            <th>{{ __('index.Commission paid') }}</th>
                            <th>{{ __('index.Order status') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partner->orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->name ?? '—' }}</td>
                                <td>{{ $order->total_price }} {{ __('index.dh') }}</td>
                                <td class="text-green-600 font-semibold">{{ $order->commission_amount }} {{ __('index.dh') }}</td>
                                <td>
                                    <span class="badge {{ $order->commission_paid ? 'badge-success' : 'badge-warning' }}">
                                        {{ $order->commission_paid ? __('index.paid') : __('index.pending') }}
                                    </span>
                                </td>
                                <td><span class="badge text-xs p-3 {{ getStatusBg($order->status) }}">{{ __('index.' . $order->status) }}</span></td>
                                <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-xs btn-success view"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif

    </main>
</x-app-layout>
