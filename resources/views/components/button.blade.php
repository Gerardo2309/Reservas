<button {{ $attributes->merge(['type' => 'submit', 'class' => 'border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline disabled:opacity-25']) }}>
    {{ $slot }}
</button>
