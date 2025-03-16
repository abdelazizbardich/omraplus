<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3 @if (isset($edit)) border border-blue-950 @endif">
                @if (isset($edit))
                    <form action="{{ route('discounts.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Name')}}:
                                <input type="text" name="name" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Code')}}:
                                <input type="text" name="code" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Program')}}:
                                <select name="program" class="grow border-none focus:shadow-none shadow-none">
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->name }}</option>                                    
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Type')}}:
                                <select name="type" class="grow border-none focus:shadow-none shadow-none">
                                    <option value="percentage">{{__('index.percentage')}}</option>
                                    <option value="fixed">{{__('index.fixed')}}</option>
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Value')}}:
                                <input type="text" name="value" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <button type="submit"
                            class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Edit')}}</button>
                    </form>
                @else
                    <form action="{{ route('discounts.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Name')}}:
                                <input type="text" name="name" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Code')}}:
                                <input type="text" name="code" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Program')}}:
                                <select name="program" class="grow border-none focus:shadow-none shadow-none text-xs" >
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}">
                                            ({{ $program->flight->title }})
                                            {{ $program->name() }}
                                    </option>                                    
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Type')}}:
                                <select name="type" class="grow border-none focus:shadow-none shadow-none">
                                    <option value="percentage">{{__('index.percentage')}}</option>
                                    <option value="fixed">{{__('index.fixed')}}</option>
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('index.Value')}}:
                                <input type="text" name="value" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
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