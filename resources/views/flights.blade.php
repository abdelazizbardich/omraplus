<x-app-layout :name=$name>
    <main class="flex-1 flex flex-col gap-12">
        <div class="w-full">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <form action="{{ route('flights.save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="input input-bordered inpu flex items-center gap-2">
                            {{__('Title')}}:
                            <input type="text" name="title" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                        <input type="text" name="slug" class="input input-sm w-full mt-1" placeholder="" value="Lorem ipsum dolor sit amet" disabled />
                    </div>
                    <div class="mb-3 grid grid-cols-3 gap-4 items-center">
                        <label class="text-nowrap input input-bordered flex items-center gap-2">
                            {{__('Going date')}}:
                            <input type="date" name="going_date" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                        <label class="text-nowrap input input-bordered flex items-center gap-2">
                            {{__('Return date')}}:
                            <input type="date" name="return_date" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                        <label class="text-nowrap input input-bordered flex items-center gap-2">
                            {{__('Type')}}:
                            <select name="type" class="grow border-none focus:shadow-none shadow-none">
                                <option value="omra">{{__('Omra')}}</option>
                                <option value="hajj">{{__('Hajj')}}</option>
                            </select>
                        </label>
                        <label class="text-nowrap input input-bordered flex items-center gap-2">
                            {{__('Category')}}:
                            <select name="category" class="grow border-none focus:shadow-none shadow-none">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label class="text-nowrap input input-bordered flex items-center gap-2">
                            {{__('Aireline')}}:
                            <select name="aireline" class="grow border-none focus:shadow-none shadow-none">
                            @foreach ($airelines as $aireline)
                                    <option value="{{ $aireline->id }}">{{ $aireline->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <div class="form-control">
                            <label class="label cursor-pointer flex-row-reverse w-fit gap-3">
                                <span class="label-text">{{__('Recomanded')}}</span>
                                <input type="checkbox" class="toggle" name="recomanded" />
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
                                {{__('Fligth photos')}}
                                <input type="file" name="fligth_photos[]" class="grow w-full max-w-xs" multiple />
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-1 block">{{__('Description')}}:</label>
                        <textarea placeholder="{{__('Fligth Description')}}" rows="7" class="textarea textarea-bordered w-full text-small"></textarea>
                    </div>
                    <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Add')}}</button>
                </form>
            </div>
        </div>
        <div class="w-fill">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Going date')}}</th>
                                <th>{{__('Return date')}}</th>
                                <th>{{__('Description')}}</th>
                                <th>{{__('Category')}}</th>
                                <th>{{__('Type')}}</th>
                                <th>{{__('Recomanded')}}</th>
                                <th>{{__('Aireline')}}</th>
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
                                            <div class="font-bold">{{__('Title')}}</div>
                                        </div>
                                    </div>
                                </td>
                                <th>{{__('Going date')}}</th>
                                <th>{{__('Return date')}}</th>
                                <th>{{__('Description')}}</th>
                                <th>{{__('Category')}}</th>
                                <th>{{__('Type')}}</th>
                                <th>{{__('Recomanded')}}</th>
                                <th>{{__('Aireline')}}</th>
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