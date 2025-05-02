<div class="relative carousel-container">
    <div class="carousel flex justify-center overflow-y-hidden overflow-x-auto space-x-4 pb-3">
        {{ $slot }}
    </div>
    <button
        class="prev bg-white absolute left-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white px-1 aspect-square rounded-md md:px-3 shadow-md focus:outline-none">
        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    d="M14.9991 19L9.83911 14C9.56672 13.7429 9.34974 13.433 9.20142 13.0891C9.0531 12.7452 8.97656 12.3745 8.97656 12C8.97656 11.6255 9.0531 11.2548 9.20142 10.9109C9.34974 10.567 9.56672 10.2571 9.83911 10L14.9991 5"
                    stroke="#000000" stroke-width="2.3280000000000003" stroke-linecap="round" stroke-linejoin="round">
                </path>
            </g>
        </svg>
    </button>
    <button
        class="next bg-white absolute right-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white px-1 aspect-square rounded-md md:px-3 shadow-md focus:outline-none">
        <svg class="rotate-180 w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    d="M14.9991 19L9.83911 14C9.56672 13.7429 9.34974 13.433 9.20142 13.0891C9.0531 12.7452 8.97656 12.3745 8.97656 12C8.97656 11.6255 9.0531 11.2548 9.20142 10.9109C9.34974 10.567 9.56672 10.2571 9.83911 10L14.9991 5"
                    stroke="#000000" stroke-width="2.3280000000000003" stroke-linecap="round" stroke-linejoin="round">
                </path>
            </g>
        </svg>
    </button>
</div>