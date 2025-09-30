@props(['active' => false])

@php
    // Base classes for all links
    $classes = 'text-sm font-medium px-4 py-2 rounded-full transition duration-300';
    
    // Conditional classes based on the 'active' prop
    if ($active) {
        // Active: Bright purple background with white text
        $classes .= ' bg-purple-600 text-white shadow-lg shadow-purple-600/40';
    } else {
        // Inactive: Subtle hover effect
        $classes .= ' text-gray-400 hover:bg-deep-violet/50 hover:text-purple-300';
    }
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}
    aria-current="{{ $active ? 'page' : 'false' }}"
>
    {{ $slot }}
</a>