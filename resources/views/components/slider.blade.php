<div class="w-full slider">
  <div class="carousel w-full rounded-2xl overflow-hidden">
    @foreach ($images as $index => $image)
    <div id="item-{{ $index + 1 }}" class="carousel-item w-full">
      <img loading="lazy" src="{{ $image }}" class="w-full aspect-video object-cover">
    </div>
  @endforeach
  </div>
  <div class="slider-nav flex justify-start items-start gap-3 mt-1 w-full">
    @foreach ($images as $index => $image)
    <span data-id="item-{{ $index + 1 }}" class="slider-nev-item rounded-xl cursor-pointer">
      <img loading="lazy" src="{{ $image }}" class="aspect-square object-cover w-full rounded-xl max-h-16 md:max-h-36">
    </span>
  @endforeach
  </div>
</div>