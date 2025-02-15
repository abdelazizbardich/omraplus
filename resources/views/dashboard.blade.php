<x-app-layout>
    <main class="flex-1">
        <!-- Stats Cards -->
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div class="stats shadow-xl border border-yellow-100">
                <div class="stat">
                    <div class="stat-title text-yellow-600 mb-3">{{__('reservations')}}</div>
                    <div class="stat-value text-blue-950 mb-1">8940</div>
                    <div class="stat-desc text-blue-950">15 {{__('Not confirmed yet')}}</div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>