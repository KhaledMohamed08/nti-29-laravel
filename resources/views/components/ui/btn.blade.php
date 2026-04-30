@props([
    'color' => 'primary',
    'size' => '',
    'href' => '#',
    'type' => 'link'
])


@if ($type === 'link')
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "btn btn-{$color} btn-{$size}"]) }} > {{ $slot }} </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => "btn btn-{$color} btn-{$size}"]) }} > {{ $slot }} </button>
@endif