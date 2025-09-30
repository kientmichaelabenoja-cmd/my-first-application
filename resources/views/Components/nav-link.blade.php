@props(['active' => false])
<a {{ $attributes->class([
    'text-sm font-medium px-3 py-2 rounded-lg transition duration-300',
    // Active styling (Your custom dark theme version)
    'bg-deep-violet/50 border border-purple-600' => $active, 
    // Inactive styling (Your custom dark theme version)
    'hover:bg-deep-violet/50 hover:text-purple-300 text-gray-400' => ! $active
]) }}
    aria-current="{{ $active ? 'page' : 'false' }}"
>{{ $slot }}</a>