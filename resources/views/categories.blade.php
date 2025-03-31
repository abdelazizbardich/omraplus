<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 @if(isset($edit)) border border-blue-950 @endif py-3">
                @if(isset($edit))
                    <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 flex flex-col gap-2">
                            <label class="input input-bordered flex items-center gap-2">{{__('index.Name_en')}}:
                                <input type="text" value="{{ $category->name_en }}" name="name_en" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                            <label class="input input-bordered flex items-center gap-2">{{__('index.Name_fr')}}:
                                <input type="text" value="{{ $category->name_fr }}" name="name_fr" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                            <label class="input input-bordered flex items-center gap-2">{{__('index.Name_ar')}}:
                                <input type="text" value="{{ $category->name_ar }}" name="name_ar" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                        </div>
                    <div class="flex justify-between">
                            <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Edit')}}</button>
                            <a href="{{ route('categories') }}" type="submit" class="btn btn-wide">{{__('index.Cansel')}}</a>
                        </div>
                    </form>
                @else
                    <form action="{{ route('categories.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 flex gap-2 flex-col">
                            <label class="input input-bordered flex items-center gap-2">{{__('index.Name_en')}}:
                                <input type="text" name="name_en" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                            <label class="input input-bordered flex items-center gap-2">{{__('index.Name_fr')}}:
                                <input type="text" name="name_fr" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                            <label class="input input-bordered flex items-center gap-2">{{__('index.Name_ar')}}:
                                <input type="text" name="name_ar" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                        </div>
                        <button type="submit"
                            class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Add')}}</button>
                    </form>
                @endif
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        {{ $category->name }}
                                    </td>
                                    <th>
                                        <a href="{{ route('categories.edit', $category->id) }}"
                                            class="btn btn-xs btn-info edit"></a>
                                        <a href="{{ route('categories.delete', $category->id) }}"
                                            class="btn btn-xs btn-error delete"></a>
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