<x-app-layout :name=$name>
    <main class="flex-1 flex flex-col gap-12">
        <div  class="collapse collapse-plus border-base-300 bg-base-200 border">
            <input id="collapse-toggler" type="checkbox" hidden class="hidden" @if(isset($edit)) checked @endif />
            <label for="collapse-toggler" class="collapse-title text-xl font-medium shadow bg-white">
            @if(isset($edit))
            {{ __('index.Edit flight') }}
            @else
            {{ __('index.New flight') }}
            @endif
        </label>
            <div class="collapse-content bg-white rounded-xl rounded-t-none shadow-lg">
                <div class="w-full p-0 px-3 py-3 pt-6">
                    @if(isset($edit))
                        <form action="{{ route('flights.update', $flight->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 flex flex-col gap-2">
                                <label class="input input-bordered inpu flex items-center gap-2">{{__('index.Title_en')}}:
                                    <input type="text" id="fligth-title_en" name="title_en" value="{{ old('title_en', $flight->title_en) }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                </label>
                                <label class="input input-bordered inpu flex items-center gap-2">{{__('index.Title_fr')}}:
                                    <input type="text" id="fligth-title_fr" name="title_fr" value="{{ old('title_fr', $flight->title_fr) }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                </label>
                                <label class="input input-bordered inpu flex items-center gap-2">{{__('index.Title_ar')}}:
                                    <input type="text" id="fligth-title_ar" name="title_ar" value="{{ old('title_ar', $flight->title_ar) }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                </label>
                            </div>
                            <div class="mb-3 grid grid-cols-3 gap-4 items-center">
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Going date')}}:
                                    <input type="date" name="going_date" value="{{ old('going_date', $flight->going_date) }}"
                                        class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                </label>
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Return date')}}:
                                    <input type="date" name="return_date" value="{{ old('return_date', $flight->return_date) }}"
                                        class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                </label>
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Type')}}:
                                    <select name="type" class="grow border-none focus:shadow-none shadow-none"
                                        value="{{ old('type', $flight->type) }}">
                                        <option value="umrah" @if(old('type', $flight->type) === "umrah") selected @endif>
                                            {{__('index.Omra')}}</option>
                                        <option value="hajj" @if(old('type', $flight->type) === "hajj") selected @endif>
                                            {{__('index.Hajj')}}</option>
                                    </select>
                                </label>
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Category')}}:
                                    <select name="category" class="grow border-none focus:shadow-none shadow-none">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if(old('category', $flight->category->id) == $category->id) selected @endif>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Aireline')}}:
                                    <select name="aireline" class="grow border-none focus:shadow-none shadow-none">
                                        @foreach ($airelines as $aireline)
                                            <option value="{{ $aireline->id }}"
                                                @if(old('aireline', $flight->airline->id) == $aireline->id) selected @endif>{{ $aireline->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <div class="form-control">
                                    <label class="label cursor-pointer flex-row-reverse w-fit gap-3">
                                        <span class="label-text">{{__('index.Recomanded')}}</span>
                                        <input type="checkbox" class="checkbox" checked="{{$flight->is_recommended == 1}}" name="is_recommended" />
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="input input-bordered flex items-center gap-2">
                                        {{__('index.Primary photo')}}
                                        <input type="file" name="primary_photo" class="grow w-full max-w-xs" />
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="input input-bordered flex items-center gap-2">
                                        {{__('index.Fligth photos')}}
                                        <input type="file" name="fligth_photos[]" class="grow w-full max-w-xs" multiple />
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 block">{{__('index.Description_en')}}:</label>
                                <textarea id="text-editor_en" name="description_en" placeholder="{{__('index.Fligth Description_en')}}" rows="12" class="textarea textarea-bordered w-full text-small">{{ old('description_en', $flight->description_en) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 block">{{__('index.Description_fr')}}:</label>
                                <textarea id="text-editor_fr" name="description_fr" placeholder="{{__('index.Fligth Description_fr')}}" rows="12" class="textarea textarea-bordered w-full text-small">{{ old('description_fr', $flight->description_fr) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 block">{{__('index.Description_ar')}}:</label>
                                <textarea id="text-editor_ar" name="description_ar" placeholder="{{__('index.Fligth Description_ar')}}" rows="12" class="textarea textarea-bordered w-full text-small">{{ old('description_ar', $flight->description_ar) }}</textarea>
                            </div>
                                <div class="flex justify-start gap-3">
                                    <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Edit')}}</button>
                                    <a href="{{ route('flights') }}" type="submit" class="btn btn-wide">{{__('index.Cansel')}}</a>
                                </div>
                            </form>
                    @else
                        <form action="{{ route('flights.save') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 flex flex-col gap-2">
                                <label class="input input-bordered inpu flex items-center gap-2">{{__('index.Title_en')}}:
                                    <input type="text" id="fligth-title_en" name="title_en" value="{{ old('title_en') }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                </label>
                                <label class="input input-bordered inpu flex items-center gap-2">{{__('index.Title_fr')}}:
                                    <input type="text" id="fligth-title_fr" name="title_fr" value="{{ old('title_fr') }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                </label>
                                <label class="input input-bordered inpu flex items-center gap-2">{{__('index.Title_ar')}}:
                                    <input type="text" id="fligth-title_ar" name="title_ar" value="{{ old('title_ar') }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                </label>
                            </div>
                            <div class="mb-3 grid grid-cols-3 gap-4 items-center">
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Going date')}}:
                                    <input type="date" name="going_date" value="{{ old('going_date') }}" class="grow border-none focus:shadow-none shadow-none"
                                        placeholder="" />
                                </label>
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Return date')}}:
                                    <input type="date" name="return_date" value="{{ old('return_date') }}" class="grow border-none focus:shadow-none shadow-none"
                                        placeholder="" />
                                </label>
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Type')}}:
                                    <select name="type" class="grow border-none focus:shadow-none shadow-none">
                                        <option value="umrah" @if(old('type') === 'umrah') selected @endif>{{__('index.Omra')}}</option>
                                        <option value="hajj" @if(old('type') === 'hajj') selected @endif>{{__('index.Hajj')}}</option>
                                    </select>
                                </label>
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Category')}}:
                                    <select name="category" class="grow border-none focus:shadow-none shadow-none">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if(old('category') == $category->id) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <label class="text-nowrap input input-bordered flex items-center gap-2">
                                    {{__('index.Aireline')}}:
                                    <select name="aireline" class="grow border-none focus:shadow-none shadow-none">
                                        @foreach ($airelines as $aireline)
                                            <option value="{{ $aireline->id }}" @if(old('aireline') == $aireline->id) selected @endif>{{ $aireline->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <div class="form-control">
                                    <label class="label cursor-pointer flex-row-reverse w-fit gap-3">
                                        <span class="label-text">{{__('index.Recomanded')}}</span>
                                        <input type="checkbox" class="checkbox" name="is_recommended" checked="{{ old('is_recommended') }}" />
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="input input-bordered flex items-center gap-2">
                                        {{__('index.Primary photo')}}
                                        <input type="file" name="primary_photo" class="grow w-full max-w-xs" />
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="input input-bordered flex items-center gap-2">
                                        {{__('index.Fligth photos')}}
                                        <input type="file" name="fligth_photos[]" class="grow w-full max-w-xs" multiple />
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 block">{{__('index.Description_en')}}:</label>
                                <textarea id="text-editor_en" name="description" placeholder="{{__('index.Fligth Description_en')}}" rows="12" class="textarea text-editor textarea-bordered w-full text-small">{{ old('description_en') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 block">{{__('index.Description_fr')}}:</label>
                                <textarea id="text-editor_fr" name="description" placeholder="{{__('index.Fligth Description_fr')}}" rows="12" class="textarea text-editor textarea-bordered w-full text-small">{{ old('description_fr') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 block">{{__('index.Description_ar')}}:</label>
                                <textarea id="text-editor_ar" name="description" placeholder="{{__('index.Fligth Description_ar')}}" rows="12" class="textarea text-editor textarea-bordered w-full text-small">{{ old('description_ar') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Add')}}</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div >
        <div class="w-fill">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto datatable">
                    <input type="text" class="search input" placeholder="{{__('index.Search')}}...">
                    <table class="table ">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('index.Title')}}</th>
                                <th>{{__('index.Going date')}}</th>
                                <th>{{__('index.Return date')}}</th>
                                <th>{{__('index.Description')}}</th>
                                <th>{{__('index.Category')}}</th>
                                <th>{{__('index.Type')}}</th>
                                <th>{{__('index.Recomanded')}}</th>
                                <th>{{__('index.Aireline')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($flights as $flight)
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle h-12 w-12">
                                                <a href="{{ route('flight', $flight->id) }}">
                                                    <img src="{{ @$flight->mainPhoto->url }}" alt="{{ $flight->title }}" />
                                                </a>    
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold">
                                                    <a href="{{ route('flight', $flight->id) }}">{{ $flight->title }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">{{ $flight->going_date }}</td>
                                    <td class="text-nowrap">{{ $flight->return_date }}</td>
                                    <td>{!! $flight->short_description() !!}</td>
                                    <td>{{ $flight->category->name }}</td>
                                    <td>{{ __('index.'.$flight->type) }}</td>
                                    <td>
                                        @if($flight->is_recommended)
                                            <em
                                                class="fa fa-check rounded-full p-1 bg-emerald-700 text-white aspect-square"></em>
                                        @else
                                            <em class="fa fa-check rounded-full p-1 bg-red-800 text-white aspect-square"></em>
                                        @endif
                                    </td>
                                    <td>{{ $flight->airline->name }}</td>
                                    <td>
                                        <a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-xs btn-info edit"></a>
                                        <a href="{{ route('flights.delete', $flight->id) }}" class="btn btn-xs btn-error delete"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>