<!-- Open the modal using ID.showModal() method -->
<dialog class="modal">
  <div class="modal-box w-11/12 max-w-7xl">
    <h3 class="text-lg font-bold mb-3 block title">
        
    </h3>
    <div class="border-b w-full h-0 mb-3 opacity-25"></div>
    <div class="flex items-stretch mb-3">
        <div class="w-5/12">
            <x-slider :images="[Vite::asset('resources/images/umrah-offer-main.webp'), Vite::asset('resources/images/mission-1.jpg'), Vite::asset('resources/images/mission-2.jpg'), Vite::asset('resources/images/mission-3.jpg'), Vite::asset('resources/images/mission-4.jpg')]"></x-slider>
        </div>
        <div class="w-7/12 px-3">
            <span class="block text-xl font-bold mb-3">الحجوزات المتاحة:</span>
            <div class="h-full max-h-96 no-scrollbar overflow-y-auto programs">
              @if(false)
                @foreach ([(object)["featured"=>true, "id"=>1],(object)["featured"=>true, "id"=>1],(object)["featured"=>true, "id"=>1],(object)["featured"=>true, "id"=>1],(object)["featured"=>true, "id"=>1]] as $index=>$booking)
                    <div class="mb-6">
                        <x-booking-card :size="'small'" :booking="$booking" :index="$index"></x-booking-card>
                    </div>
                @endforeach
              @endif
            </div>
        </div>
    </div>
    <div class="border-b w-full h-0 mb-3 opacity-25"></div>
    <div class="w-full">
        <span class="block text-2xl font-bold w-full block mb-6">وصف العرض</span>
        <div class="text-base font-normal description"></div>
    </div>
    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn btn-sm btn-circle border-none outline-none shadow-none absolute end-2 top-2">✕</button>
      </form>
    </div>
  </div>
</dialog>