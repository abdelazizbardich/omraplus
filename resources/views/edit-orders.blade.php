<x-app-layout :name=$name>
    <main class="flex-1 flex flex-col gap-4">
        {{-- Edit Form --}}
        <div class="w-full">
            <div class="bg-white rounded-xl shadow-lg px-4 py-4 border border-blue-950">
                <h2 class="font-bold text-lg text-blue-950 mb-3">{{ __('index.Edit Order') }}</h2>

                @if ($errors->any())
                    <div class="alert alert-error mb-3">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                    @csrf
                    <div class="flex flex-row gap-4">
                        {{-- Order Status --}}
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{ __('index.Order status') }}:
                                <select name="status" class="grow border-none focus:shadow-none shadow-none">
                                    @foreach (['pending', 'approved', 'rejected'] as $status)
                                        <option value="{{ $status }}" @selected($order->status === $status)>
                                            {{ __('index.' . $status) }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
    
                        {{-- Payment Status --}}
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{ __('index.Payment status') }}:
                                <select name="payment_status" class="grow border-none focus:shadow-none shadow-none">
                                    @foreach (['pending', 'approved', 'rejected'] as $status)
                                        <option value="{{ $status }}" @selected($order->payment_status === $status)>
                                            {{ __('index.' . $status) }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
    
                        {{-- Payment Method --}}
                        <div class="mb-4">
                            <label class="input input-bordered flex items-center gap-2">
                                {{ __('index.Payment method') }}:
                                <select name="payment_method" class="grow border-none focus:shadow-none shadow-none">
                                    @foreach (['PAY_LATER', 'BANK_TRANSFER', 'PAY_BY_CARD', 'CASHPLUS'] as $method)
                                        <option value="{{ $method }}" @selected($order->payment_method === $method)>
                                            {{ __('index.' . $method) }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <button type="submit"
                            class="btn btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{ __('index.Save') }}</button>
                        <a href="{{ route('orders') }}"
                            class="btn btn-ghost">{{ __('index.Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
        {{-- Left column: Order Details + User Details --}}
        <div class="w-full flex flex-row flex-nowrap gap-4">
            {{-- Order Details --}}
            <div class="bg-white rounded-xl shadow-lg px-4 py-4 w-full lg:w-[48%]">
                <h2 class="font-bold text-lg text-blue-950 mb-3">{{ __('index.Order Details') }}</h2>

                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Order') }} #:</span>
                    <span class="ml-1 font-mono">{{ $order->id }}</span>
                </div>
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Order date') }}:</span>
                    <span class="ml-1">{{ $order->created_at->format('Y-m-d H:i') }}</span>
                </div>

                <div class="divider my-1"></div>

                {{-- Program / Flight --}}
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Flight') }}:</span>
                    <span class="ml-1">{{ $order->flight()->title }}</span>
                </div>
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Program') }}:</span>
                    <span class="ml-1">{{ $order->program()->name() }}</span>
                </div>
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Room') }}:</span>
                    <span class="ml-1">{{ $order->room()->name }}</span>
                </div>

                <div class="divider my-1"></div>

                {{-- Booking numbers --}}
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Pilgrims count') }}:</span>
                    <span class="ml-1">{{ $order->pilgrims_count }}</span>
                </div>
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Total Price') }}:</span>
                    <span class="ml-1 font-bold">{{ money($order->total_price) }} {{ __('index.dh') }}</span>
                </div>

                <div class="divider my-1"></div>

                {{-- Current statuses (badges) --}}
                <div class="mb-2 flex items-center gap-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Order status') }}:</span>
                    <span class="badge text-xs p-3 {{ getStatusBg($order->status) }}">{{ __('index.' . $order->status) }}</span>
                </div>
                <div class="mb-2 flex items-center gap-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Payment status') }}:</span>
                    <span class="badge text-xs p-3 {{ getStatusBg($order->payment_status) }}">{{ __('index.' . $order->payment_status) }}</span>
                </div>
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Payment method') }}:</span>
                    <span class="ml-1">{{ __('index.' . $order->payment_method) }}</span>
                </div>
            </div>
            {{-- User / Client Details --}}
            <div class="bg-white rounded-xl shadow-lg px-4 py-4 w-full lg:w-[48%]">
                <h2 class="font-bold text-lg text-blue-950 mb-3">{{ __('index.Client') }}</h2>

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
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Name') }}:</span>
                    <span class="ml-1">{{ $order->user->first_name }} {{ $order->user->last_name }}</span>
                </div>
                @endif
                @if ($order->user->phone)
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Phone') }}:</span>
                    <span class="ml-1">{{ $order->user->phone }}</span>
                </div>
                @endif
                @if ($order->user->city)
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.City') }}:</span>
                    <span class="ml-1">{{ $order->user->city }}</span>
                </div>
                @endif
                @if ($order->user->job)
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Job') }}:</span>
                    <span class="ml-1">{{ $order->user->job }}</span>
                </div>
                @endif
                <div class="mb-2">
                    <span class="font-semibold text-gray-600">{{ __('index.Account') }}:</span>
                    <a href="{{ route('users.edit', $order->user->id) }}" class="ml-1 link link-primary text-sm">
                        {{ __('index.View profile') }}
                    </a>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>