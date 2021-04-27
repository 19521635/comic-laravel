<div class="left-nav py-2 bg-white w-64 transition-spacing duration-500 {{ $isShow ? '' : '-ml-64' }}">
    <ul class="flex flex-col font-bold text-sm text-gray-600">
        <li class="{{ request()->routeIs('admin.dashboard') ? 'bg-gray-50' : '' }}">
            <a href="{{ route('admin.dashboard') }}"
                class="flex flex-row items-center px-6 py-4 hover:bg-gray-100 transition">
                <span class="mr-6"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg></span>
                Bảng điều khiển
            </a>
        </li>
        @foreach ($themeItems as $themeItem)
        <li>
            <div class="flex flex-row items-center px-6 py-4 cursor-pointer hover:bg-gray-100 transition"
                wire:click="toggleTheme">
                <span class="mr-6"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="{{$themeItem['svg']}}" />
                    </svg></span>
                {{$themeItem['name']}}
                <span class="flex flex-grow justify-end items-center">
                    <svg xmlns=" http://www.w3.org/2000/svg"
                        class="transition-transform transform duration-500 {{ $isTheme ? 'rotate-180' : '' }} h-4 w-4"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </span>
            </div>
            <div
                class="sub-menu overflow-hidden duration-500 ease-out transition-maxHeight {{ $isTheme ? 'max-h-screen' : 'max-h-0' }}">
                @foreach ($themeItem['childs'] as $themeChildItem)
                <a href="{{ route($themeChildItem['link']) }}"
                    class="flex flex-row items-center px-6 pl-12 py-4 cursor-pointer hover:bg-gray-100 transition">
                    <span class="mr-6"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="{{$themeChildItem['svg']}}" />
                        </svg></span>
                    {{$themeChildItem['name']}}
                </a>
                @endforeach
            </div>

        </li>
        @endforeach

    </ul>
</div>