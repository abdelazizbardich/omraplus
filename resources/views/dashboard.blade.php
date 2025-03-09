<x-app-layout :name=$name>
    <main class="flex-1">
        <!-- Stats Cards -->
        <div class="grid grid-cols-4 gap-4 mb-6">
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.reservations')}}</div>
                    <div class="stat-value text-blue-950 mb-1">8940</div>
                    <div class="stat-desc text-blue-950">15 {{__('index.Not confirmed yet')}}</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Flights')}}</div>
                    <div class="stat-value text-blue-950 mb-1">30</div>
                    <div class="stat-desc text-blue-950">15 {{__('index.Hajj Flight')}} {{__('index.and')}} 15 {{__('index.Omra Flight')}}
                    </div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Programs')}}</div>
                    <div class="stat-value text-blue-950 mb-1">8940</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Hotels')}}</div>
                    <div class="stat-value text-blue-950 mb-1">8940</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Airlines')}}</div>
                    <div class="stat-value text-blue-950 mb-1">8940</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Pricing')}}</div>
                    <div class="stat-value text-blue-950 mb-1">8940</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.Discounts')}}</div>
                    <div class="stat-value text-blue-950 mb-1">8940</div>
                </div>
            </div>
            <div class="stats shadow-xl">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('index.users')}}</div>
                    <div class="stat-value text-blue-950 mb-1">8940</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg px-3 py-3 mb-6">
            <span class="text-lg mb-3 block">{{ __('index.reservations tracking') }}</span>
            <canvas id="chart" height="100"></canvas>
        </div>
        <div class="bg-white rounded-xl shadow-lg px-3 py-3">
            <span class="text-lg mb-3 block">{{ __('index.last 10 reservations') }}</span>
            <div class="overflow-x-auto datatable">
                <input type="text" class="search input" placeholder="{{__('index.Search')}}...">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Favorite Color</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Hart Hagerty</div>
                                        <div class="text-sm opacity-50">United States</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Zemlak, Daniel and Leannon
                                <br />
                                <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                            </td>
                            <td>Purple</td>
                            <th>
                                <button class="btn btn-ghost btn-xs">...</button>
                            </th>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/3@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Brice Swyre</div>
                                        <div class="text-sm opacity-50">China</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Carroll Group
                                <br />
                                <span class="badge badge-ghost badge-sm">Tax Accountant</span>
                            </td>
                            <td>Red</td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/4@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Marjy Ferencz</div>
                                        <div class="text-sm opacity-50">Russia</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Rowe-Schoen
                                <br />
                                <span class="badge badge-ghost badge-sm">Office Assistant I</span>
                            </td>
                            <td>Crimson</td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                        <!-- row 4 -->
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/5@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Yancy Tear</div>
                                        <div class="text-sm opacity-50">Brazil</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Wyman-Ledner
                                <br />
                                <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
                            </td>
                            <td>Indigo</td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-app-layout>