<x-app-layout :name=$name>
    <main class="flex-col flex gap-4">
        <div class="w-full">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto datatable">
                    <input type="text" class="search input" placeholder="{{__('index.Search',[])}}...">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('index.Name')}}</th>
                                <th>{{__('index.email')}}</th>
                                <th>{{__('index.Comment')}}</th>
                                <th>{{__('index.approved')}}</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                             @foreach($comments as $comment)
                                <tr>
                                    <td>{{ $comment->guest_name }}</td>
                                    <td>{{ $comment->guest_email}}</td>
                                    <td>{{ $comment->content}}</td>
                                <td>
                                    @if($comment->is_approved)
                                        <span class="text-success">{{__('index.Approved')}}</span>
                                    @else
                                        <span class="text-warning">{{__('index.Not Approved')}}</span>
                                    @endif
                                </td>
                                <th>
                                    <a href="{{ route('admin.comments.delete',$comment->id) }}" class="btn btn-xs btn-error delete"></a>
                                    @if(!$comment->is_approved)
                                    <a href="{{ route('admin.comments.approve',$comment->id) }}" class="btn btn-xs border-success approve tooltip" data-tip="{{__('index.approve')}}"></a>
                                    @endif
                                </th>
                                <td>
                                    @if($comment->is_spam)
                                        <span class="text-red-500">{{__('index.Spam')}}</span>
                                    @endif
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