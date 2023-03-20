@props(['type' => 'button'])

<button
    type={{ $type }}
    {!! $attributes->merge(['class' => 'w-full bg-blue-500 hover:bg-blue-600 text-white rounded-lg px-3 py-1.5 text-sm font-medium focus:outline-none']) !!}
>
    {{ $slot }}
</button>
