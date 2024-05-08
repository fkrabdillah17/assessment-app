@props(['active' => false])
<li>
    <a {{ $attributes }}
        class="{{ $active ? 'bg-blue-700 text-white dark:bg-blue-600 md:text-blue-700 md:dark:bg-transparent md:dark:text-white md:bg-transparent' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-white' }} block rounded px-3 py-2 md:p-0"
        aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
</li>
