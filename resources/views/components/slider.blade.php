<div class="w-full slider">
  <div class="carousel w-full rounded-2xl overflow-hidden">
    @foreach ($images as $index => $image)
    <div id="item-{{ $index + 1 }}" class="carousel-item w-full">
      <img src="{{ $image }}" class="w-full aspect-video object-cover">
    </div>
  @endforeach
  </div>
  <div class="flex justify-start items-start gap-3 mt-1 w-full">
    @foreach ($images as $index => $image)
    <span data-id="item-{{ $index + 1 }}" class="slider-nev-item rounded-xl cursor-pointer">
      <img src="{{ $image }}" class="aspect-square object-cover w-full rounded-xl max-h-36">
    </span>
  @endforeach
  </div>
</div>