<div>
<a href="{{ $href }}" class="group flex font-mulish items-center p-2 rounded-lg {{ $isActive ? 'text-brown-50 font-bold bg-green-500 hover:bg-green-700 group ' : 'text-green-500 hover:bg-green-50 ' }}">
    <div class="flex items-center justify-center flex-shrink-0 w-7 h-7 transition duration-75 {{ $isActive ? 'fill-green-50 group-hover:fill-white' : 'fill-green-300 group-hover:fill-green-600'}}">
        {!! $svg !!}
    </div>

    <span class="flex-1 ml-3 whitespace-nowrap {{ $isActive ? 'text-green-50 hover:text-white ': 'text-green-400 hover:text-green-700 ' }}">{{ $slot }}</span>
    
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