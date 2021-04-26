<section class="container px-4 mx-auto my-5">
    <div class="section__header text-2xl tracking-tighter font-medium text-red-600 mb-2">
        <a href="#" class="flex justify-items-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mr-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
            </svg>
            @if (isset($title))
            {{$title}}
            @else
            {{__('Truyện mới cập nhật')}}
            @endif
        </a>
    </div>
    <div class="section__body grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
        <div class="p-1.5 text-center relative">
            <a href="#" class="h-52 sm:h-56 md:h-64 block overflow-hidden rounded-md">
                <img src="https://i3.wp.com/khotruyen.net/images/august-9th-i-will-be-eaten-by-you.jpg" alt="img"
                    class="align-middle object-cover max-h-full w-full">
            </a>
            <div class="noti absolute top-2.5 left-3"><span
                    class="py-0.5 px-1   rounded-md text-white bg-blue-300 text-sm font-medium">9 giờ trước</span>
            </div>
            <div class="title font-medium tracking-tight mt-3"><a href="#">Chị Gái Của Tôi Là Quỷ</a></div>
            <div class="episode font-normal text-sm tracking-tight"><a href=" #">Chapter 1</a></div>
        </div>
    </div>
</section>