<div class="container mx-auto p-4 flex justify-items-center items-center w-full">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="logo">
        <a href="/">
            <img src="{{ asset('img/logo.png') }}" alt="ReadComic">
        </a>
    </div>

    <div class="search ml-20 relative w-1/3">
        <input type="text" wire:model.defer="keyword" name="keyword" autocomplete="off" autocorrect="off"
            autocapitalize="off" spellcheck="false" placeholder="Nhập tên truyện cần tìm"
            class="w-full rounded-full border border-gray-200 text-gray-500 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-gray-200">
        <span class="absolute inset-y-0 right-0 flex items-center">
            <button class="w-8 h-8 focus:outline-none" wire:click="search">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </span>
    </div>

    <div class="features flex flex-grow justify-end items-center">
        @if (Route::has('login'))
        @auth
        <div class="mr-2 group">
            <a href="{{ route('profile.show') }}"
                class="block group-hover:bg-gray-200 p-1 rounded-md">{{Auth::user()->display_name}}</a>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="group">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"
                class="group-hover:bg-gray-200 rounded-full h-10 w-10 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </a>
        </form>
        @else
        <div class="login">
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </div>
        @if (Route::has('register'))
        <div class="register ml-4">
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
        @endif
        @endauth
        @endif
    </div>
</div>