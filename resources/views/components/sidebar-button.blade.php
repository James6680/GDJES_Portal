<div>
<a href="{{ $href }}" class="group flex font-mulish text-sm items-center p-2 rounded-lg {{ $isActive ? 'text-brown-50 font-bold bg-gradient-to-t from-green-500 to-slate-900 hover:shadow-lg hover:shadow-slate-100 group ' : 'text-green-500 hover:bg-green-50 hover:shadow-lg hover:shadow-slate-100' }}">
  <div class="flex items-center justify-center flex-shrink-0 w-7 h-7 transition duration-75 {{ $isActive ? 'fill-green-50 group-hover:fill-white' : 'fill-green-300 group-hover:fill-green-600'}}">
    {!! $svg !!}
  </div>

  <span class="flex-1 ml-3 whitespace-nowrap {{ $isActive ? 'text-green-50 hover:text-white ': 'text-green-400 group-hover:text-green-700 ' }}">{{ $slot }}</span>

  @if($badge != "")
    <span class="inline-flex items-center justify-center px-2 ml-3 rounded-full text-xs font-medium outline outline-offset-1 outline-1 text-gray-800 bg-gray-100  ">{{ $badge }}</span>
  @endif

  @if($notification != "")
    <span class="inline-flex items-center justify-center w-2 h-2 p-2 ml-3 text-xs rounded-full font-medium outline outline-offset-1 outline-1 group-hover:outline-2 {{ $isActive ? 'outline-yellow-100 text-yellow-700 bg-yellow-50' : 'outline-green-600 text-green-600 bg-green-50'}} ">
    {{ $notification ?? '' }}
    </span>
  @endif
</a>
</div>