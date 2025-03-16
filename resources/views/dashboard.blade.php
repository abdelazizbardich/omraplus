<x-app-layout :name=$name>
    <main class="flex-1">
        <!-- Stats Cards -->
        <div class="grid grid-cols-4 gap-4 mb-6">
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.reservations')}}</div>
                    <div class="stat-value text-blue-950 mb-1">{{ $orders }}</div>
                    <div class="stat-desc text-blue-950">{{$pendingOrders}} {{__('index.Not confirmed yet')}}</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Flights')}}</div>
                    <div class="stat-value text-blue-950 mb-1">{{$flights}}</div>
                    <div class="stat-desc text-blue-950">{{$hajj_flights}} {{__('index.Hajj Flight')}} {{__('index.and')}} {{$omra_flights}} {{__('index.Omra Flight')}}
                    </div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Programs')}}</div>
                    <div class="stat-value text-blue-950 mb-1">{{$programs}}</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Hotels')}}</div>
                    <div class="stat-value text-blue-950 mb-1">{{$hotels}}</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Airlines')}}</div>
                    <div class="stat-value text-blue-950 mb-1">{{$airlines}}</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Pricing')}}</div>
                    <div class="stat-value text-blue-950 mb-1">{{$prices}}</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Discounts')}}</div>
                    <div class="stat-value text-blue-950 mb-1">{{$discounts}}</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.users')}}</div>
                    <div class="stat-value text-blue-950 mb-1">{{$users}}</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg px-3 py-3 mb-6">
            <span class="text-lg mb-3 block">{{ __('index.reservations tracking') }}</span>
            <canvas id="chart" height="100" data-data="{{ json_encode($ordersByMonths) }}" ></canvas>
        </div>
        <div class="bg-white rounded-xl shadow-lg px-3 py-3">
            <span class="text-lg mb-3 block">{{ __('index.last 10 reservations') }}</span>
            <div class="overflow-x-auto datatable">
                <input type="text" class="search input" placeholder="{{__('index.Search')}}...">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th class="sortable">{{__('index.Client')}}</th>
                            <th class="sortable">{{__('index.Program')}}</th>
                            <th class="sortable">{{__('index.Pilgrims count')}}</th>
                            <th class="sortable">{{__('index.Price')}}</th>
                            <th class="sortable">{{__('index.Order status')}}</th>
                            <th class="sortable">{{__('index.Payment status')}}</th>
                            <th class="sortable">{{__('index.Payment method')}}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($lastOrders as $order)
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        @if($order->user->photo)
                                            <div class="avatar">
                                                <div class="mask mask-squircle h-12 w-12">
                                                    <img src="{{ @$order->user->photo->url}}" alt="user photo" />
                                                </div>
                                            </div>
                                        @endif
                                        <div>
                                            <div class="font-bold">
                                                {{ $order->user->name}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{ $order->flight()->title}}<br />
                                    <span class="font-semibold">{{ $order->room()->name }}</span>:
                                    {{ $order->program()->name()}}
                                </td>
                                <td>{{ $order->pilgrims_count}}</td>
                                <td>{{ $order->total_price}} {{ __('index.dh') }}</td>
                                <td><span class="badge text-xs p-3 {{getStatusBg($order->status)}}">{{ __('index.' . $order->status)}}</span></td>
                                <td><span class="badge text-xs p-3 {{getStatusBg($order->payment_status)}}">{{ __('index.' . $order->payment_status)}}</span></td>
                                <td>{{ __('index.' . $order->payment_method)}}</td>
                                </td>
                                <!-- <th>
                                    <a href="{{ route('orders.edit', $order->id) }}"
                                        class="btn btn-xs btn-info edit"></a>
                                    <a href="{{ route('orders.delete', $order->id) }}"
                                        class="btn btn-xs btn-error delete"></a>
                                </th> -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-app-layout>