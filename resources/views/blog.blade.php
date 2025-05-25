<x-app-layout :name=$name>
    <main class="flex-col flex gap-4">
        <div  class="collapse collapse-plus border-base-300 bg-base-200 border">
            <input id="collapse-toggler" type="checkbox" hidden class="hidden" @if(isset($edit)) checked @endif />
            <label for="collapse-toggler" class="collapse-title text-xl font-medium shadow bg-white">
                @if(isset($edit))
                {{ __('index.Edit Article') }}
                @else
                {{ __('index.New Article') }}
                @endif
            </label>
            <div class="collapse-content bg-white rounded-xl rounded-t-none shadow-lg">
                <div class="w-full p-0 px-3 py-3 pt-6">
                    @if(isset($edit))
                        <form action="{{ route('admin.blog.update',$post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 flex flex-col gap-2">  
                                <div class="flex items-center gap-2">
                                    <div class="w-fit">
                                        <x-image-select name=image :value="$photoUrl"></x-image-select>
                                    </div>
                                    <div class="w-full">
                                        <label class="input input-bordered flex items-center mb-4">{{__('index.title_en')}}:
                                            <input type="text" name="title_en" value="{{ old('title_en',$post->title_en) }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                        </label>
                                        <label class="input input-bordered flex items-center mb-4">{{__('index.title_fr')}}:
                                            <input type="text" name="title_fr" value="{{ old('title_fr',$post->title_fr) }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                        </label>
                                        <label class="input input-bordered flex items-center mb-4">{{__('index.title_ar')}}:
                                            <input type="text" name="title_ar" value="{{ old('title_ar',$post->title_ar) }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                        </label>
                                    </div>
                                </div>  
                                <br>
                                <div class="mb-3">
                                    <label class="">{{__('index.content_en')}}:</label>
                                    <textarea name="content_en" id="text-editor_en" class="textarea text-editor textarea-bordered w-full text-small" data-lang="en" rows="15" placeholder="">{!! old('content_en',$post->content_en) !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="">{{__('index.content_fr')}}:</label>
                                    <textarea name="content_fr" id="text-editor_fr" class="textarea text-editor textarea-bordered w-full text-small" data-lang="fr" rows="15" placeholder="">{!! old('content_fr',$post->content_fr) !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="">{{__('index.content_ar')}}:</label>
                                    <textarea name="content_ar" id="text-editor_ar" class="textarea text-editor textarea-bordered w-full text-small" data-lang="ar" rows="15" placeholder="">{!! old('content_ar',$post->content_ar) !!}</textarea>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Edit')}}</button>
                                <a href="{{ route('admin.blog') }}" type="submit" class="btn btn-wide">{{__('index.Cansel')}}</a>
                            </div>
                        </form>
                    @else
                        <form action="{{ route('admin.blog.save') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 flex flex-col gap-2">  
                                <div class="flex items-center gap-2">
                                    <div class="w-fit">
                                        <x-image-select name=image></x-image-select>
                                    </div>
                                    <div class="w-full">
                                        <label class="input input-bordered flex items-center mb-4">{{__('index.title_en')}}:
                                            <input type="text" name="title_en" value="{{ old('title_en') }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                        </label>
                                        <label class="input input-bordered flex items-center mb-4">{{__('index.title_fr')}}:
                                            <input type="text" name="title_fr" value="{{ old('title_fr') }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                        </label>
                                        <label class="input input-bordered flex items-center mb-4">{{__('index.title_ar')}}:
                                            <input type="text" name="title_ar" value="{{ old('title_ar') }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                                        </label>
                                    </div>
                                </div>  
                                <br>
                                <div class="mb-3">
                                    <label class="">{{__('index.content_en')}}:</label>
                                    <textarea name="content_en" id="text-editor_en" class="textarea text-editor textarea-bordered w-full text-small" data-lang="en" rows="15" placeholder="">{!! old('content_en') !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="">{{__('index.content_fr')}}:</label>
                                    <textarea name="content_fr" id="text-editor_fr" class="textarea text-editor textarea-bordered w-full text-small" data-lang="fr" rows="15" placeholder="">{!! old('content_fr') !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="">{{__('index.content_ar')}}:</label>
                                    <textarea name="content_ar" id="text-editor_ar" class="textarea text-editor textarea-bordered w-full text-small" data-lang="ar" rows="15" placeholder="">{!! old('content_ar') !!}</textarea>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Save')}}</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto datatable">
                    <input type="text" class="search input" placeholder="{{__('index.Search',[])}}...">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('index.title')}}</th>
                                <th>{{__('index.excerpt')}}</th>
                                <th>{{__('index.is_published')}}</th>
                                <th>{{__('index.view_count')}}</th>
                                <th>{{__('index.share_count')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                             @foreach($posts as $post)
                                <tr>
                                    <td>
                                        <span class="block font-medium">{{ $post->title }}</span>
                                        <span>{{__('index.By')}} {{ $post->author->first_name }} {{ $post->author->last_name }}</span>
                                    </td>
                                    <td>{{ $post->excerpt}}</td>
                                    <td>
                                        @if($post->is_published)
                                            {{__('index.is_published')}} {{__('index.at')}}
                                            {{moment($post->published_at)->format("M d, Y")}}
                                        @else
                                            {{__('index.not published')}}
                                        @endif
                                    </td>
                                    <td>{{ $post->view_count }}</td>
                                    <td>{{ $post->share_count }}</td>
                                    <th>
                                        <a href="{{ route('admin.blog.edit',$post->id) }}" class="btn btn-xs btn-info edit"></a>
                                        <a href="{{ route('admin.blog.delete',$post->id) }}" class="btn btn-xs btn-error delete"></a>
                                        <a href="{{ route('admin.blog.publish',$post->id) }}" class="btn btn-xs btn-success publish tooltip" data-tip="{{__('index.publish')}}"></a>
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