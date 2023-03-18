@props([
    'type' => 'text',
    'error' => null,
])

<div>
    <input type="{{ $type }}" {!! $attributes->merge(['class' => 'w-full border border-gray-200 focus:border-gray-300 bg-gray-50 rounded-sm px-2 py-1.5 text-sm focus:outline-none' ]) !!}>

    @if ($error)
        <span class="text-red-500 text-xs">{{ $error }}</span>
    @endif
</div>
