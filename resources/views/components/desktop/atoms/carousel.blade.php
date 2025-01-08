<div class="w-full">
  <div class="carousel w-full rounded-3xl overflow-hidden">
    @foreach ($images as $index => $image)
    <div id="item{{ $index + 1 }}" class="carousel-item w-full">
      <img src="{{ $image }}" class="w-full aspect-video object-cover">
    </div>
  @endforeach
  </div>
  <div class="flex justify-start items-start gap-3 mt-1 w-full">
    @foreach ($images as $index => $image)
    <a href="#item{{ $index + 1 }}">
      <img src="{{ $image }}" class="aspect-square object-cover w-full rounded-xl h-36">
    </a>
  @endforeach
  </div>
</div>