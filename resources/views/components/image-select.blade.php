<div class="border rounded m-1">
    <label for="select-image" class="cursor-pointer">
        <img class="object-cover rounded cursor-pointer h-48 w-48 hover:opacity-75" onerror="this.onerror=null;this.src='{{ Vite::asset('resources/images/image-placeholder.svg') }}';" src="{{$value}}">
    </label>
    <input type="file" hidden accept="image/*" name="{{ $name }}" id="select-image" class="hidden" onchange="previewImage(event, this)">
    <script>
        function previewImage(event, input) {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.querySelector('label[for="select-image"] img');
                    img.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</div>