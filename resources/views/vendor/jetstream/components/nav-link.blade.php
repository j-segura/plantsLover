@props(['active'])

@php
$classes = ($active ?? false)
            ? 'link_active link'
            : 'link_inactive link';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
