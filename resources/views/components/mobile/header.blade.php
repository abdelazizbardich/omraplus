<header>
  <div class="navbar bg-base-100 w-full flex justify-between bg-blue-950 py-3 px-6">
    <div class="">
      <a href="{{ route('home') }}">
        <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="{{ __('Logo') }}" class="h-10">
      </a>
    </div>
    <div class="">
      <label for="drawer-toggle" onclick="openMenu()">
        <button class="btn btn-square btn-ghost text-white text-5xl">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            class="inline-block h-5 w-5 stroke-current">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </label>
    </div>
  </div>
</header>

<script>
  function openMenu() {
    const drawer = document.getElementById('drawer-toggle');
    drawer.checked = true;
  }
</script>