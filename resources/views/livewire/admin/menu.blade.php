<div class="left-nav shadow-md py-2 bg-white w-64 transition-spacing duration-500"
    :class="{ '-ml-64': !openMenu, '': openMenu }">
    <ul class="flex flex-col font-bold text-sm text-gray-600">
        {{-- Items --}}
        @foreach ($themeItems as $themeItem)
        <li x-data="{ openMenu: false }">
            @if (count($themeItem['childs']) > 0)
            <div class="flex flex-row items-center px-6 py-4 cursor-pointer hover:bg-gray-100"
                x-on:click="openMenu = !openMenu">
                @else
                <a href="{{ route($themeItem['link']) }}"" class=" flex flex-row items-center px-6 py-4 cursor-pointer
                    hover:bg-gray-100 {{ $this->isActive($themeItem['link'].'*') }}">
                    @endif
                    <span class="mr-6"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="{{ $themeItem['svg'] }}" />
                        </svg></span>
                    {{ $themeItem['name'] }}
                    @if (count($themeItem['childs']) > 0)
                    <span class="flex flex-grow justify-end items-center">
                        <svg xmlns=" http://www.w3.org/2000/svg"
                            class="transition-transform transform duration-500 h-4 w-4"
                            :class="{ '': !openMenu, 'rotate-180': openMenu }" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                    </span>
            </div>
            @else
            </a>
            @endif
            <div class="sub-menu overflow-hidden transition-maxHeight"
                :class="{ 'max-h-0': !openMenu, 'max-h-screen': openMenu }">
                @foreach ($themeItem['childs'] as $themeChildItem)
                <a href="{{ route($themeChildItem['link']) }}"
                    class="flex flex-row items-center px-6 pl-12 py-4 cursor-pointer hover:bg-gray-100 transition {{ $this->isActive($themeItem['link'].'*') }}">
                    <span class="mr-6"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="{{ $themeChildItem['svg'] }}" />
                        </svg></span>
                    {{ $themeChildItem['name'] }}
                </a>
                @endforeach
            </div>

        </li>
        @endforeach
        {{-- End Items --}}
    </ul>
</div>