<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <form action="{{ route('pricing.save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('index.Name')}}:
                            <input type="text" name="name" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('index.Email')}}:
                            <input type="text" name="email" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('index.Password')}}:
                            <input type="password" name="password" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('index.Role')}}:
                            <select name="role" class="grow border-none focus:shadow-none shadow-none">
                                @foreach (getRoles() as $role)
                                    <option value="{{ $role }}">{{ __($role) }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('index.Account status')}}:
                            <select name="status" class="grow border-none focus:shadow-none shadow-none">
                                <option value="1">{{ __('index.Active') }}</option>
                                <option value="0">{{ __('index.Inactive') }}</option>
                            </select>
                        </label>
                    </div>
                    <button type="submit"
                        class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Add')}}</button>
                </form>
            </div>
        </div>
        <div class="w-3/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto datatable">
                    <input type="text" class="search input" placeholder="{{__('index.Search')}}...">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('index.Name')}}</th>
                                <th>{{__('index.Email')}}</th>
                                <th>{{__('index.Account status')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle h-12 w-12">
                                                    <img src="{{ @$user->photo->url }}"
                                                        alt="Avatar Tailwind CSS Component" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold">{{ $user->name }}</div>
                                                <div class="text-sm opacity-50">{{__($user->role)}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->is_active)
                                            <span class="text-nowrap text-xm text-white py-2 badge badge-success">{{__('index.Active')}}</span>
                                        @else
                                            <span class="text-nowrap text-xm text-white py-2 badge badge-error">{{__('index.Inactive')}}</span>
                                        @endif
                                    </td>
                                    <th>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-info edit"></a>
                                        <a href="{{ route('users.delete', $user->id) }}" class="btn btn-xs btn-error delete"></a>
                                    </th>
                                </tr>
                             
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>