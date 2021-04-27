<div class="p-4">
    <div class="section__title font-bold text-xl">
        Mega Menu
    </div>

    <div class="container mx-auto mt-4">
        <div class="grid grid-cols-3">
            <div class="flex flex-col justify-items-center items-center">
                <div class="text-lg font-bold mb-3">Level 1</div>
                <div class="flex flex-col w-full text-sm font-medium">
                    <div x-data="{open: false}">
                        <div x-show="!open" x-on:click="open = true"
                            class="bg-white p-3 rounded-md mb-2 cursor-pointer transition-all duration-300 hover:shadow-2xl hover:bg-green-400 text-green-500 hover:text-white text-center font-bold">
                            Thêm mới
                        </div>
                        <div x-show="open"
                            class="bg-white p-3 rounded-md mb-2 flex flex-col justify-items-center items-center">
                            <div class="flex flex-row w-full space-x-2">
                                <div class="font-bold flex flex-1">
                                    Thêm mới
                                </div>
                                <button wire:click="create"
                                    class="focus:outline-none rounded-full hover:bg-gray-100 active:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </button>
                                <button x-on:click="open = false"
                                    class="focus:outline-none rounded-full hover:bg-gray-100 active:bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div>
                                @if (session()->has('message'))
                                <span class="text-sm font-bold text-red-500">{{ session('message') }}</span>
                                @endif
                                <input type="text" name="title" placeholder="Nhập tiêu đề"
                                    class="mt-3 w-full rounded-md text-sm focus:ring-blue-200" wire:model="title">
                                @error('title')<span
                                    class="text-sm font-bold text-red-500">{{ $message }}</span>@enderror
                                <input type="text" name="url" placeholder="Nhập đường dẫn"
                                    class="mt-3 w-full rounded-md text-sm focus:ring-blue-200" wire:model="url">
                                @error('url')<span class="text-sm font-bold text-red-500">{{ $message }}</span>@enderror
                                <input type="hidden" wire:model="parent_id">
                                @error('parent_id')<span
                                    class="text-sm font-bold text-red-500">{{ $message }}</span>@enderror
                                <div class="flex mt-3 justify-content-center items-center">
                                    <label for="style_id" class="mr-2">Kiểu: </label>
                                    <select name="style_id" id="style_id" class="text-sm rounded-md w-full"
                                        wire:model="style_id">
                                        <option value="">Chọn kiểu</option>
                                        <option value="1">Đầy trang</option>
                                        <option value="2">Một phần</option>
                                    </select>
                                </div>
                                @error('style_id')<span
                                    class="text-sm font-bold text-red-500">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    {{-- Items --}}
                    @foreach ($menus as $menu)
                    <div
                        class="bg-white p-3 rounded-md mb-2 cursor-pointer transition-all duration-300 hover:shadow-2xl">
                        {{$menu->title}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>