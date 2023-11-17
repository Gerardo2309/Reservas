@props(['value'])

<label {{ $attributes->merge(['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
