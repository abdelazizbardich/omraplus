<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-full">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
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
                            @foreach ($orders as $order)
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle h-12 w-12">
                                                    <img src="{{ @$order->user->photo->url}}" alt="user photo" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold">{{ $order->user->name}}</div>
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
        </div>
    </main>
</x-app-layout>