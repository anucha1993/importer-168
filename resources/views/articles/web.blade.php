@extends('layouts.app-labour')

@section('content')
    <style>
        .truncate-lines {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            /* จำนวนบรรทัดที่ต้องการแสดง */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .fixed-height {
            height: 6em;
            /* ปรับความสูงตามบรรทัดที่ต้องการ */
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            /* กำหนดจำนวนบรรทัดที่ต้องการ */
            -webkit-box-orient: vertical;
            line-height: 1.5em;
            /* ปรับตามขนาดตัวอักษร */
            text-overflow: ellipsis;
        }
    </style>
    <br>
    <div id="animation-carousel"class="relative w-full mx-auto max-w-screen-xl " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="{{ url('carousel/รับบริการด้านเอกสารแรงงานต่างด้าว-2-importer168.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="{{ url('carousel/รับบริการด้านเอกสารแรงงานต่างด้าว-importer168.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="บริการนำเข้าแรงงานต่างด้าวMOU">
            </div>

        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    <br>



    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12 ">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>

                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">ข่าวสาร และความรู้</h2>
                </div>


            </div>

            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-3">
                @foreach ($articles as $article)
                    <div
                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">

                        <div class="flex justify-center mx-4 items-center">
                            <img src="{{ url($article->image_path) }}" alt="ประกอบการให้บริการแรงงานต่างด้าว"
                                class="rounded-lg shadow-md" style="width: 1800px">
                        </div>

                        <div class="pt-6">
                            <div class="mb-4 flex items-center justify-between gap-4">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $article->category->name }}</span>

                                <div class="flex items-center justify-end gap-1">
                                    <div id="tooltip-quick-look" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                        data-popper-placement="top">
                                        Quick look
                                    </div>
                                </div>
                            </div>


                            <h2 class="ext-lg font-semibold leading-tight text-gray-900 dark:text-white">
                                {!! $article->title !!}
                            </h2>


                            <div class="mt-2 flex items-center gap-2">
                                <div class="flex items-center fixed-height truncate-lines">
                                    {!! Str::limit(strip_tags(preg_replace('/<img[^>]+>/i', '', $article->content)), 150) !!}
                                </div>
                            </div>

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <a href="{{ url('articles/' . $article->id) }}"
                                    class="text-blue-600 hover:underline font-medium">
                                    อ่านเพิ่มเติม..
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach

                
    </section>

    
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12 ">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>

                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">กิจกรรมการให้บริการของเรา</h2>
                </div>


            </div>

            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-3">
                @foreach ($articles3 as $article3)
                    <div
                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">

                        <div class="flex justify-center mx-4 items-center">
                            <img src="{{ url($article3->image_path) }}" alt="ประกอบการให้บริการแรงงานต่างด้าว"
                                class="rounded-lg shadow-md" style="width: 1800px">
                        </div>

                        <div class="pt-6">
                            <div class="mb-4 flex items-center justify-between gap-4">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $article3->category->name }}</span>

                                <div class="flex items-center justify-end gap-1">
                                    <div id="tooltip-quick-look" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                        data-popper-placement="top">
                                        Quick look
                                    </div>
                                </div>
                            </div>


                            <h2 class="ext-lg font-semibold leading-tight text-gray-900 dark:text-white">
                                {!! $article3->title !!}
                            </h2>


                            <div class="mt-2 flex items-center gap-2">
                                <div class="flex items-center fixed-height truncate-lines">
                                    {!! Str::limit(strip_tags(preg_replace('/<img[^>]+>/i', '', $article3->content)), 150) !!}
                                </div>
                            </div>

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <a href="{{ url('articles/' . $article3->id) }}"
                                    class="text-blue-600 hover:underline font-medium">
                                    อ่านเพิ่มเติม..
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach

                
    </section>


    



    <!-- Section ที่เป็นรูปมือถือสองเครื่องข้างกัน -->
    <section class="flex flex-wrap justify-center gap-10 mt-10">

        <!-- กรอบมือถือสำหรับโพสต์ Facebook เครื่องซ้าย -->
        <div class="relative w-[380px] h-[740px] bg-gray-600 rounded-[3.5rem] flex items-center justify-center p-4">
            <!-- กรอบโทรศัพท์ภายในสีเทา -->
            <div
                class="relative w-[360px] h-[720px] bg-gray-100 rounded-[3rem] shadow-lg overflow-hidden border-8 border-gray-300">

                <!-- แถบสถานะด้านบน -->
                <div
                    class="absolute top-0 left-0 right-0 bg-gray-200 flex items-center justify-between px-4 h-8 rounded-t-[2.5rem]">
                    <!-- เวลา -->
                    <div class="text-xs font-semibold text-gray-700" id="phone-time-left">12:00</div>

                    <!-- ไอคอนสถานะ -->
                    <div class="flex items-center space-x-1">
                        <span class="text-xs text-gray-500">LTE</span>
                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M1 6a1 1 0 000 2h18a1 1 0 100-2H1zM3 10a1 1 0 000 2h14a1 1 0 100-2H3zM5 14a1 1 0 000 2h10a1 1 0 100-2H5z">
                            </path>
                        </svg>
                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6 12l1.41 1.41L11 9.83V20h2V9.83l3.59 3.58L18 12l-6-6-6 6z"></path>
                        </svg>
                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5 8a5 5 0 1110 0v1h1a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6a1 1 0 011-1h1V8zm7 7h2v-5h-2v5z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Iframe สำหรับแสดงโพสต์ Facebook เครื่องซ้าย -->
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fimporter168&tabs=timeline&width=340&height=720&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="100%" height="100%" style="border:none;overflow:hidden" scrolling="yes" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>

                <!-- ปุ่ม Home ด้านล่างของหน้าจอมือถือ -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-gray-400 w-12 h-12 rounded-full"></div>
            </div>
        </div>

        <!-- กรอบมือถือสำหรับโพสต์ Facebook เครื่องขวา -->
        <div class="relative w-[380px] h-[740px] bg-gray-600 rounded-[3.5rem] flex items-center justify-center p-4">
            <!-- กรอบโทรศัพท์ภายในสีเทา -->
            <div
                class="relative w-[360px] h-[720px] bg-gray-100 rounded-[3rem] shadow-lg overflow-hidden border-8 border-gray-300">

                <!-- แถบสถานะด้านบน -->
                <div
                    class="absolute top-0 left-0 right-0 bg-gray-200 flex items-center justify-between px-4 h-8 rounded-t-[2.5rem]">
                    <!-- เวลา -->
                    <div class="text-xs font-semibold text-gray-700" id="phone-time-right">12:00</div>

                    <!-- ไอคอนสถานะ -->
                    <div class="flex items-center space-x-1">
                        <span class="text-xs text-gray-500">LTE</span>
                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M1 6a1 1 0 000 2h18a1 1 0 100-2H1zM3 10a1 1 0 000 2h14a1 1 0 100-2H3zM5 14a1 1 0 000 2h10a1 1 0 100-2H5z">
                            </path>
                        </svg>
                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6 12l1.41 1.41L11 9.83V20h2V9.83l3.59 3.58L18 12l-6-6-6 6z"></path>
                        </svg>
                        <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5 8a5 5 0 1110 0v1h1a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6a1 1 0 011-1h1V8zm7 7h2v-5h-2v5z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Iframe สำหรับแสดงโพสต์ Facebook เครื่องขวา -->
                <iframe
                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fimporter168%2Fposts%2F350062144463763&show_text=true&width=340"
                    width="100%" height="100%" style="border:none;overflow:hidden" scrolling="yes" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>


                <!-- ปุ่ม Home ด้านล่างของหน้าจอมือถือ -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-gray-400 w-12 h-12 rounded-full">
                </div>
            </div>
        </div>

    </section>









    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
