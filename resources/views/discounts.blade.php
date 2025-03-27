<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3 @if (isset($edit)) border border-blue-950 @endif">
                @if (isset($edit))
                    <form action="{{ route('discounts.update') }}" method="post" enctype="multipart/form-data" dir="{{getLanguageDirection($formLang)}}">
                            @csrf
                            <div class="mb-3 flex gap-2">
                                <label class="text-nowrap input input-bordered flex items-center gap-2 w-2/6">
                                    {{__('index.language',[],$formLang)}}:
                                    <select name="lang" class="form-lang-select grow border-none focus:shadow-none shadow-none" value="{{ old('lang', $$discount->lang) }}">
                                        <option value="ar" @if(old('lang', $$discount->type) === "ar") selected @endif>{{__('index.ar',[],$formLang)}}</option>
                                        <option value="fr" @if(old('lang', $$discount->type) === "fr") selected @endif>{{__('index.fr',[],$formLang)}}</option>
                                    </select>
                                </label>
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Name',[],$formLang)}}:
                                <input type="text" name="name" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Code',[],$formLang)}}:
                                <input type="text" name="code" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Program',[],$formLang)}}:
                                <select name="program" class="grow border-none focus:shadow-none shadow-none">
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->name }}</option>                                    
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Type',[],$formLang)}}:
                                <select name="type" class="grow border-none focus:shadow-none shadow-none">
                                    <option value="percentage">{{__('index.percentage',[],$formLang)}}</option>
                                    <option value="fixed">{{__('index.fixed',[],$formLang)}}</option>
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Value',[],$formLang)}}:
                                <input type="text" name="value" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <button type="submit"
                            class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Edit',[],$formLang)}}</button>
                    </form>
                @else
                    <form action="{{ route('discounts.save') }}" method="post" enctype="multipart/form-data" dir="{{getLanguageDirection($formLang)}}">
                            @csrf
                            <div class="mb-3 flex gap-2">
                                <label class="text-nowrap input input-bordered flex items-center gap-2 w-2/6">
                                    {{__('index.language',[],$formLang)}}:
                                    <select name="lang" class="form-lang-select grow border-none focus:shadow-none shadow-none" value="{{ old('lang', $$formLang) }}">
                                        <option value="ar" @if(old('lang', $formLang) === "ar") selected @endif>{{__('index.ar',[],$formLang)}}</option>
                                        <option value="fr" @if(old('lang', $formLang) === "fr") selected @endif>{{__('index.fr',[],$formLang)}}</option>
                                    </select>
                                </label>
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Name',[],$formLang)}}:
                                <input type="text" name="name" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Code',[],$formLang)}}:
                                <input type="text" name="code" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Program',[],$formLang)}}:
                                <select name="program" class="grow border-none focus:shadow-none shadow-none">
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->name() }}</option>                                    
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Type',[],$formLang)}}:
                                <select name="type" class="grow border-none focus:shadow-none shadow-none">
                                    <option value="percentage">{{__('index.percentage',[],$formLang)}}</option>
                                    <option value="fixed">{{__('index.fixed',[],$formLang)}}</option>
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Value',[],$formLang)}}:
                                <input type="text" name="value" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <button type="submit"
                            class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Add',[],$formLang)}}</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="w-3/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto datatable">
                    <input type="text" class="search input" placeholder="{{__('index.Search')}}...">
                    <table class="table ">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('index.Name')}}</th>
                                <th>{{__('index.Code')}}</th>
                                <th>{{__('index.Type')}}</th>
                                <th>{{__('index.Value')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <td>Hart Hagerty</td>
                                <td>CD34</td>
                                <td>fixed</td>
                                <td>50</td>
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