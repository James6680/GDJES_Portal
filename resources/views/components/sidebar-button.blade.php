<div>
<a href="{{ $href }}" class="flex items-center p-2 green-600 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
    {!! $svg !!}
    <span class="flex-1 ml-3 whitespace-nowrap">{{ $slot }}</span>
    {{ $badge ?? '' }}
</a>
</div>