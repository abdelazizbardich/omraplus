<!-- Open the modal using ID.showModal() method -->
<dialog class="modal" id="m-{{ $data->id }}">
  <div class="modal-box w-11/12 max-w-7xl no-scrollbar p-3 md:p-6">
    <h3 class="text-lg font-bold mb-3 block title">
      <a href="{{ route('flight', $data->id) }}">
        {{ $data->title }}
      </a>
    </h3>
    <div class="flex flex-col h-full">
      <div class="flex flex-col md:flex-row items-stretch mb-3">
        <div class="w-full md:w-5/12">
          <x-slider :images="collect($data->photos)->pluck('url')->filter()->all()"></x-slider>
        </div>
        <div class="w-full md:w-7/12 px-3">
          <span class="text-xl md:text-2xl font-bold w-full block mb-3 md:mb-6">{{ __('index.Description of the offer') }}</span>
          <div class="description md:h-96 overflow-y-auto no-scrollbar">
            {!! $data->description !!}
          </div>
        </div>
      </div>
      <div class="w-full h-2/6">
        <span class="block text-xl font-bold mb-3">{{ __('index.Available reservations') }}:</span>
        <div class="h-full max-h-96 no-scrollbar overflow-y-auto programs flex flex-wrap">
          @foreach ($data->programs as $index => $booking)
            <div class="mb-6 w-full"><x-booking-card :size="'small'" :booking="$booking" :index="$index"></x-booking-card></div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn btn-sm btn-circle border-none outline-none shadow-none absolute end-2 top-2">✕</button>
      </form>
    </div>
  </div>
</dialog>