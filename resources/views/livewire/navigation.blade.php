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
        <div class="login">
            <a href="#">{{ __('Login') }}</a>
        </div>
        <div class="register ml-4">
            <a href="#">{{ __('Register') }}</a>
        </div>
    </div>
</div>