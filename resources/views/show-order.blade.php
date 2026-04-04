<x-app-layout :name=$name>
    <main class="flex-1 flex flex-col gap-4">

        {{-- Header bar --}}
        <div class="flex items-center justify-between">
            <h1 class="text-xl font-bold text-blue-950">
                {{ __('index.Order Preview') }} <span class="font-mono text-gray-500">#{{ $order->id }}</span>
            </h1>
            <div class="flex gap-2">
                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-info">
                    {{ __('index.Edit') }}
                </a>
                <a href="{{ route('orders') }}" class="btn btn-sm btn-ghost">
                    {{ __('index.Back') }}
                </a>
            </div>
        </div>

        <div class="flex flex-row flex-wrap gap-4">

            {{-- ── Order card ────────────────────────────── --}}
            <div class="flex-1 min-w-72 bg-white rounded-xl shadow-lg px-5 py-5">
                <h2 class="font-bold text-base text-blue-950 mb-3 border-b pb-2">{{ __('index.Order Details') }}</h2>

                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Order') }} #</span>
                    <span class="font-mono font-semibold">{{ $order->id }}</span>
                </div>
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Order date') }}</span>
                    <span>{{ $order->created_at->format('Y-m-d  H:i') }}</span>
                </div>

                <div class="divider my-1"></div>

                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Flight') }}</span>
                    <span class="text-right">{{ $order->flight()->title }}</span>
                </div>
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Program') }}</span>
                    <span class="text-right">{{ $order->program()->name() }}</span>
                </div>
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Room') }}</span>
                    <span>{{ $order->room()->name }}</span>
                </div>

                <div class="divider my-1"></div>

                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Pilgrims count') }}</span>
                    <span class="font-semibold">{{ $order->pilgrims_count }}</span>
                </div>
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Price per person') }}</span>
                    <span>{{ money($order->programPrice->price) }} {{ __('index.dh') }}</span>
                </div>
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Total Price') }}</span>
                    <span class="font-bold text-blue-950 text-base">{{ money($order->total_price) }} {{ __('index.dh') }}</span>
                </div>

                <div class="divider my-1"></div>

                <div class="mb-2 flex justify-between items-center">
                    <span class="text-gray-500 text-sm">{{ __('index.Order status') }}</span>
                    <span class="badge text-xs p-3 {{ getStatusBg($order->status) }}">
                        {{ __('index.' . $order->status) }}
                    </span>
                </div>
                <div class="mb-2 flex justify-between items-center">
                    <span class="text-gray-500 text-sm">{{ __('index.Payment status') }}</span>
                    <span class="badge text-xs p-3 {{ getStatusBg($order->payment_status) }}">
                        {{ __('index.' . $order->payment_status) }}
                    </span>
                </div>
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Payment method') }}</span>
                    <span>{{ __('index.' . $order->payment_method) }}</span>
                </div>
            </div>

            {{-- ── Client card ───────────────────────────── --}}
            <div class="flex-1 min-w-72 bg-white rounded-xl shadow-lg px-5 py-5">
                <h2 class="font-bold text-base text-blue-950 mb-3 border-b pb-2">{{ __('index.Client') }}</h2>

                <div class="flex items-center gap-3 mb-4">
                    <div class="avatar">
                        <div class="mask mask-squircle h-14 w-14">
                            <img onerror="this.onerror=null;this.src='{{ Vite::asset('resources/images/not-found.webp') }}';"
                                 src="{{ @$order->user->photo->url }}" alt="user photo" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold text-base">{{ $order->user->name }}</div>
                        <div class="text-sm text-gray-500">{{ $order->user->email }}</div>
                    </div>
                </div>

                @if ($order->user->first_name || $order->user->last_name)
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Name') }}</span>
                    <span>{{ $order->user->first_name }} {{ $order->user->last_name }}</span>
                </div>
                @endif
                @if ($order->user->phone)
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Phone') }}</span>
                    <span>{{ $order->user->phone }}</span>
                </div>
                @endif
                @if ($order->user->city)
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.City') }}</span>
                    <span>{{ $order->user->city }}</span>
                </div>
                @endif
                @if ($order->user->job)
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Job') }}</span>
                    <span>{{ $order->user->job }}</span>
                </div>
                @endif

                <div class="divider my-1"></div>

                <a href="{{ route('users.edit', $order->user->id) }}"
                   class="btn btn-sm btn-outline btn-primary w-full">
                    {{ __('index.View profile') }}
                </a>
            </div>

            {{-- ── Partner / Referral card ───────────────── --}}
            @if ($order->partner)
            <div class="flex-1 min-w-72 bg-white rounded-xl shadow-lg px-5 py-5 border-l-4 border-yellow-400">
                <h2 class="font-bold text-base text-blue-950 mb-3 border-b pb-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a5 5 0 1 1 0 10A5 5 0 0 1 12 2zm0 12c5.33 0 8 2.67 8 4v2H4v-2c0-1.33 2.67-4 8-4z"/></svg>
                    {{ __('index.Partner') }}
                </h2>

                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Referral code') }}</span>
                    <span class="font-mono font-bold tracking-wider text-blue-950">{{ $order->partner->referral_code }}</span>
                </div>

                <div class="divider my-1"></div>

                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Name') }}</span>
                    <span class="font-semibold">{{ $order->partner->name }}</span>
                </div>
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Company name') }}</span>
                    <span>{{ $order->partner->company_name }}</span>
                </div>
                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Commission rate') }}</span>
                    <span class="font-semibold text-yellow-600">{{ $order->partner->commission_rate }}%</span>
                </div>

                <div class="divider my-1"></div>

                <div class="mb-2 flex justify-between">
                    <span class="text-gray-500 text-sm">{{ __('index.Commission amount') }}</span>
                    <span class="font-bold text-green-600">{{ money($order->commission_amount) }} {{ __('index.dh') }}</span>
                </div>
                <div class="mb-2 flex justify-between items-center">
                    <span class="text-gray-500 text-sm">{{ __('index.Commission paid') }}</span>
                    <span class="badge text-xs p-3 {{ $order->commission_paid ? 'badge-success' : 'badge-warning' }}">
                        {{ $order->commission_paid ? __('index.paid') : __('index.pending') }}
                    </span>
                </div>

                <div class="divider my-1"></div>

                <a href="{{ route('partners.show', $order->partner->id) }}"
                   class="btn btn-sm btn-outline btn-warning w-full">
                    {{ __('index.View partner') }}
                </a>
            </div>
            @endif

            {{-- ── Trip card ─────────────────────────────── --}}
            <div class="w-full bg-white rounded-xl shadow-lg px-5 py-5">
                <h2 class="font-bold text-base text-blue-950 mb-3 border-b pb-2">{{ __('index.Trip Details') }}</h2>

                <div class="flex flex-wrap gap-6">
                    <div>
                        <div class="text-gray-500 text-xs mb-1">{{ __('index.Going date') }}</div>
                        <div class="font-semibold">{{ $order->flight()->going_date }}</div>
                    </div>
                    <div>
                        <div class="text-gray-500 text-xs mb-1">{{ __('index.Return date') }}</div>
                        <div class="font-semibold">{{ $order->flight()->return_date }}</div>
                    </div>
                    <div>
                        <div class="text-gray-500 text-xs mb-1">{{ __('index.Type') }}</div>
                        <div class="font-semibold capitalize">{{ $order->flight()->type }}</div>
                    </div>
                    <div>
                        <div class="text-gray-500 text-xs mb-1">{{ __('index.Mecca Hotel') }}</div>
                        <div class="font-semibold">{{ $order->program()->hotelMecca->name }}</div>
                    </div>
                    <div>
                        <div class="text-gray-500 text-xs mb-1">{{ __('index.Medina Hotel') }}</div>
                        <div class="font-semibold">{{ $order->program()->hotelMedina->name }}</div>
                    </div>
                    <div>
                        <div class="text-gray-500 text-xs mb-1">{{ __('index.Meals') }}</div>
                        <div class="font-semibold">
                            {{ $order->program()->have_meals ? __('index.Included') : __('index.Not included') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
</x-app-layout>
