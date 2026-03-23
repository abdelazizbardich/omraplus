<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-full">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="flex justify-between items-center mb-3">
                    <span data-step="1" class="stepper-nav cursor-pointer hover:bg-gray-300 duration-300 w-fit rounded p-2 outline-3 outline-gray-200 outline flex justify-center items-center text-sm font-black bg-gray-400">{{__('index.Rooms')}}</span>
                    <span class="inline-block w-full h-1 bg-gray-200 rounded-badge"></span>
                    <span data-step="2" class="stepper-nav cursor-pointer hover:bg-gray-300 duration-300 w-fit rounded p-2 outline-3 outline-gray-200 outline flex justify-center items-center text-sm">{{__('index.Hotels')}}</span>
                    <span class="inline-block w-full h-1 bg-gray-200 rounded-badge"></span>
                    <span data-step="3" class="stepper-nav cursor-pointer hover:bg-gray-300 duration-300 w-fit rounded p-2 outline-3 outline-gray-200 outline flex justify-center items-center text-sm">{{__('index.Airlines')}}</span>
                    <span class="inline-block w-full h-1 bg-gray-200 rounded-badge"></span>
                    <span data-step="4" class="stepper-nav cursor-pointer hover:bg-gray-300 duration-300 w-fit rounded p-2 outline-3 outline-gray-200 outline flex justify-center items-center text-sm">{{__('index.Flights')}}</span>
                    <span class="inline-block w-full h-1 bg-gray-200 rounded-badge"></span>
                    <span data-step="5" class="stepper-nav cursor-pointer hover:bg-gray-300 duration-300 w-fit rounded p-2 outline-3 outline-gray-200 outline flex justify-center items-center text-sm">{{__('index.Programs')}}</span>
                    <span class="inline-block w-full h-1 bg-gray-200 rounded-badge"></span>
                    <span data-step="6" class="stepper-nav cursor-pointer hover:bg-gray-300 duration-300 w-fit rounded p-2 outline-3 outline-gray-200 outline flex justify-center items-center text-sm">{{__('index.Pricing')}}</span>
                    <span class="inline-block w-full h-1 bg-gray-200 rounded-badge"></span>
                    <span data-step="7" class="stepper-nav cursor-pointer hover:bg-gray-300 duration-300 w-fit rounded p-2 outline-3 outline-gray-200 outline flex justify-center items-center text-sm">{{__('index.Discounts')}}</span>
                </div>
                <div class="w-full mb-3">
                    <div id="step-1" class="stepper-content w-full min-h-96 flex justify-start items-start p-3">
                        @livewire('rooms.view')
                    </div>
                    <div id="step-2" class="stepper-content w-full min-h-96 flex justify-start items-start p-3 hidden">
                        @livewire('hotels.view')
                    </div>
                    <div id="step-3" class="stepper-content w-full min-h-96 flex justify-start items-start p-3 hidden">
                        @livewire('airlines.view')
                    </div>
                    <div id="step-4" class="stepper-content w-full min-h-96 flex justify-start items-start p-3 hidden">
                        @livewire('flights.view')
                    </div>
                    <div id="step-5" class="stepper-content w-full min-h-96 flex justify-start items-start p-3 hidden">
                        @livewire('programs.view')
                    </div>
                    <div id="step-6" class="stepper-content w-full min-h-96 flex justify-start items-start p-3 hidden">
                        @livewire('pricing.view')
                    </div>
                    <div id="step-7" class="stepper-content w-full min-h-96 flex justify-start items-start p-3 hidden">
                        @livewire('discounts.view')
                    </div>
                </div>
                <div class="full flex justify-between items-center gap-2">
                    <button class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000 save hidden">{{__('index.Save')}}</button>
                    <button class="btn back hidden">{{__('index.previous')}}</button>
                    <button class="btn next btn-primary bg-blue-950">{{__('index.next')}}</button>
                </div>
            </div>
        </div>
    </main>

    <script>
        const stepperNavs = document.querySelectorAll('.stepper-nav');
        const stepperContents = document.querySelectorAll('.stepper-content');
        const nextBtn = document.querySelector('.next');
        const backBtn = document.querySelector('.back');
        const saveBtn = document.querySelector('.save');
        
        let currentStep = 1;

        stepperNavs.forEach((nav, index) => {
            nav.addEventListener('click', (e) => {
                currentStep = parseInt(e.target.dataset.step);
                stepperNavs.forEach((nav) => {
                    if(nav.dataset.step == currentStep){
                        nav.classList.add('font-black');
                        nav.classList.add('bg-gray-400');
                    }else{
                        nav.classList.remove('font-black');
                        nav.classList.remove('bg-gray-400');
                    }
                    if(currentStep > 1){
                        backBtn.classList.remove('hidden');
                    }else{
                        backBtn.classList.add('hidden');
                    }
                    if(currentStep == stepperNavs.length){
                        nextBtn.classList.add('hidden');
                        saveBtn.classList.remove('hidden');
                    }else{
                        nextBtn.classList.remove('hidden');
                        saveBtn.classList.add('hidden');
                    }
                });
                stepperContents.forEach((content) => {
                    if("step-"+currentStep == content.id){
                        content.classList.remove('hidden');
                    }else{
                        content.classList.add('hidden');
                    }
                });
            });
        });

        nextBtn.addEventListener('click', () => {
            if(currentStep < stepperNavs.length){
                currentStep++;
                stepperNavs.forEach((nav) => {
                    if(nav.dataset.step == currentStep){
                        nav.classList.add('font-black');
                        nav.classList.add('bg-gray-400');
                    }else{
                        nav.classList.remove('font-black');
                        nav.classList.remove('bg-gray-400');
                    }
                    if(currentStep > 1){
                        backBtn.classList.remove('hidden');
                    }else{
                        backBtn.classList.add('hidden');
                    }
                    if(currentStep == stepperNavs.length){
                        nextBtn.classList.add('hidden');
                        saveBtn.classList.remove('hidden');
                    }else{
                        nextBtn.classList.remove('hidden');
                        saveBtn.classList.add('hidden');
                    }
                });
                stepperContents.forEach((content) => {
                    if("step-"+currentStep == content.id){
                        content.classList.remove('hidden');
                    }else{
                        content.classList.add('hidden');
                    }
                });
            }
        });
    
        backBtn.addEventListener('click', () => {
            if(currentStep > 1){
                currentStep--;
                stepperNavs.forEach((nav) => {
                    if(nav.dataset.step == currentStep){
                        nav.classList.add('font-black');
                        nav.classList.add('bg-gray-400');
                    }else{
                        nav.classList.remove('font-black');
                        nav.classList.remove('bg-gray-400');
                    }
                    if(currentStep > 1){
                        backBtn.classList.remove('hidden');
                    }else{
                        backBtn.classList.add('hidden');
                    }
                    if(currentStep == stepperNavs.length){
                        nextBtn.classList.add('hidden');
                        saveBtn.classList.remove('hidden');
                    }else{
                        nextBtn.classList.remove('hidden');
                        saveBtn.classList.add('hidden');
                    }
                });
                stepperContents.forEach((content) => {
                    if("step-"+currentStep == content.id){
                        content.classList.remove('hidden');
                    }else{
                        content.classList.add('hidden');
                    }
                });
            }
        });
    
        saveBtn.addEventListener('click', () => {
            // Save logic here
        });
    </script>

</x-app-layout>