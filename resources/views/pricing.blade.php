<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <form action="{{ route('pricing.save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('Room')}}:
                            <select name="room" class="grow border-none focus:shadow-none shadow-none">
                                <option value="percentage">{{__('percentage')}}</option>
                            </select>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('Program')}}:
                            <select name="program" class="grow border-none focus:shadow-none shadow-none">
                                <option value="fixed">{{__('fixed')}}</option>
                            </select>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('Price before discount')}}({{__('dh')}}):
                            <input type="number" name="old_price" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('Price after discount')}}({{__('dh')}}):
                            <input type="number" name="price" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                    </div>
                    <button type="submit"
                        class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Add')}}</button>
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
                                <th>{{__('Room')}}</th>
                                <th>{{__('Program')}}</th>
                                <th>{{__('Price before discount')}}</th>
                                <th>{{__('Price after discount')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <td>Hart Hagerty</td>
                                <td>CD34</td>
                                <td>3400 {{__('dh')}}</td>
                                <td>3000 {{__('dh')}}</td>
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