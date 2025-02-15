<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <form action="{{ route('hotels.save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('Name')}}:
                            <input type="text" name="name" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('Address')}}:
                            <input type="text" name="address" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('Distance from macca')}} ({{__('meter')}}):
                            <input type="number" name="distance" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('Primary photo')}}
                            <input type="file" name="primary_photo" class="grow w-full max-w-xs" />
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('Hotel photos')}}
                            <input type="file" name="hotel_photos[]" class="grow w-full max-w-xs" multiple />
                        </label>
                    </div>
                    <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Add')}}</button>
                </form>
            </div>
        </div>
        <div class="w-3/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Address')}}</th>
                                <th>{{__('Distance from macca')}}</th>
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
                                                <img src="https://img.daisyui.com/images/profile/demo/2@94.webp" alt="Avatar Tailwind CSS Component" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold">Hart Hagerty</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Zemlak, Daniel and Leannon
                                </td>
                                <td>Purple</td>
                                <th>
                                    <a href="#" class="btn btn-xs btn-info edit"></a>
                                    <a href="#" class="btn btn-xs btn-error delete"></a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>