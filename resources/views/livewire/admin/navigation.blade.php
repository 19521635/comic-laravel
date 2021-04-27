<div class="mx-auto p-4 flex justify-items-center items-center w-full">
    <button
        class="w-10 h-10 flex justify-items-center items-center focus:outline-none hover:bg-gray-200 rounded-full active:bg-gray-300"
        x-on:click=" openMenu = !openMenu ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <div class="ml-4 text-xl font-semibold">
        Dashboard
    </div>

    <div class="flex flex-grow justify-end items-center">
        <div class="relative profile group" x-data="{ openProfile: false }">
            <button
                class="w-10 h-10 rounded-full hover:bg-gray-200 active:bg-gray-300 focus:outline-none flex justify-center items-center"
                x-on:click="openProfile = !openProfile" @click.away="openProfile = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </button>
            <div class="absolute bg-white w-56 h-5 right-0 opacity-0"
                :class="{ 'visible' : openProfile, 'invisible' : !openProfile }">
            </div>
            <div class="absolute bg-white rounded-md w-56 right-0 shadow-lg mt-3 overflow-hidden transition-all ease-in-out dura"
                :class="{ 'visible transform translate-y-2 opacity-100' : openProfile, 'opacity-0 invisible' : !openProfile }">
                <ul>
                    <li class="hover:bg-gray-50"><a href="{{ route('profile.show') }}" class="block p-4">Profile</a>
                    </li>
                    <li class="hover:bg-gray-50">
                        <form method="POST" action="{{ route('logout') }}" class="group">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();" class="block p-4">
                                Log Out
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>