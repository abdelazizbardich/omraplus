<x-partner-layout>
    <div class="flex flex-col gap-6">

        <div class="bg-gradient-to-br from-blue-950 to-blue-900 text-white rounded-2xl p-8">
            <h1 class="text-2xl font-black mb-1">{{ __('index.Welcome') }}, {{ $partner->name }} 👋</h1>
            <p class="opacity-75">{{ $partner->company_name }}</p>
        </div>

        {{-- Referral Code Card --}}
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <p class="text-gray-500 mb-2">{{ __('index.Your referral code') }}</p>
            <div class="flex items-center justify-center gap-3 mb-4">
                <span id="referral-code" class="text-4xl font-black font-mono tracking-widest text-blue-950">
                    {{ $partner->referral_code }}
                </span>
                <button onclick="copyCode()" class="btn btn-sm btn-outline" title="{{ __('index.Copy') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                </button>
            </div>
            <p class="text-sm text-gray-500 max-w-md mx-auto">{{ __('index.Share this code with your clients') }}</p>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <span class="text-3xl font-black text-blue-950">{{ $partner->orders->count() }}</span>
                <p class="text-gray-500 text-sm mt-1">{{ __('index.Referred orders') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <span class="text-3xl font-black text-green-600">{{ money($partner->totalCommissions()) }}</span>
                <p class="text-gray-500 text-sm mt-1">{{ __('index.Total commissions') }} ({{ __('index.dh') }})</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <span class="text-3xl font-black text-yellow-500">{{ $partner->commission_rate }}%</span>
                <p class="text-gray-500 text-sm mt-1">{{ __('index.Commission rate') }}</p>
            </div>
        </div>

        {{-- Referred Orders Table --}}
        @if ($partner->orders->count())
        <div class="bg-white rounded-xl shadow-lg px-3 py-3">
            <h3 class="font-bold text-lg mb-3 px-3 pt-3">{{ __('index.Referred orders') }}</h3>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('index.Total Price') }}</th>
                            <th>{{ __('index.Commission amount') }}</th>
                            <th>{{ __('index.Commission paid') }}</th>
                            <th>{{ __('index.Order status') }}</th>
                            <th>{{ __('index.Order date') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partner->orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->total_price }} {{ __('index.dh') }}</td>
                                <td class="text-green-600 font-semibold">{{ $order->commission_amount }} {{ __('index.dh') }}</td>
                                <td>
                                    <span class="badge {{ $order->commission_paid ? 'badge-success' : 'badge-warning' }}">
                                        {{ $order->commission_paid ? __('index.paid') : __('index.pending') }}
                                    </span>
                                </td>
                                <td><span class="badge text-xs p-3 {{ getStatusBg($order->status) }}">{{ __('index.' . $order->status) }}</span></td>
                                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif

    </div>

    <script>
        function copyCode() {
            const code = document.getElementById('referral-code').innerText.trim();
            navigator.clipboard.writeText(code).then(() => {
                alert('{{ __('index.Copied') }}!');
            });
        }
    </script>
</x-partner-layout>
