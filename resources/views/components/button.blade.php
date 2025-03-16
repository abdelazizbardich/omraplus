<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000']) }}>
    {{ $slot }}
</button>
