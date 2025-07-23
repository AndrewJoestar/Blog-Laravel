@props(['active' => false])

<a {{ $attributes }} aria-current="{{ $active ? 'page' : false }}"
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">{{ $slot }}</a>
