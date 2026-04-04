<label class="text-nowrap input input-bordered flex items-center gap-2" x-on:category-created.window="$wire.refreshCategories()">
    {{__('index.Category')}}:
    <select name="category" class="flex-grow border-none focus:shadow-none shadow-none">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                @if(old('category', $selected) == $category->id) selected @endif>
                {{ $category->name }}</option>
        @endforeach
    </select>
    <span class="add" onclick="add_category.showModal()"></span>
</label>