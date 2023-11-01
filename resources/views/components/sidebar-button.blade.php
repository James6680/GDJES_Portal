<div>
<a href="{{ $href }}" class="flex items-center p-2 green-600 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-green-700 group">
    <div class="flex items-center justify-center flex-shrink-0 w-7 h-7 fill-green-200 transition duration-75 dark:fill-green-400 group-hover:fill-green-900 dark:group-hover:fill-white">
        {!! $svg !!}
    </div>

    <span class="flex-1 ml-3 whitespace-nowrap text-green-400 hover:text-green-900">{{ $slot }}</span>
    
    @if($badge != "")
        <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">{{ $badge }}</span>
    @endif
    
    @if($notification != "")
      <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-pink-600 bg-pink-100 rounded-full dark:bg-green-900 dark:text-green-300">
      {{ $notification ?? '' }}
      </span>
    @endif
</a>
</div>