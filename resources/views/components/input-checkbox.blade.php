@props(['label'])
<li class="w-full border-b border-gray-200 dark:border-gray-600 sm:border-b-0 sm:border-r">
    <div class="flex items-center ps-3">
        <input {{ $attributes }}
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
        <label for="{{ $label }}" class="ms-2 w-full py-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $slot }}</label>
    </div>
</li>
