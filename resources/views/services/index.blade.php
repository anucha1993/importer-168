@extends('layouts.app')

@section('content')
    <br>
    <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl " data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 ">
            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="{{ url('carousel/ธัญพิมล.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
    </div>
    <br>



    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>

                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">เลือกบริการของเรา</h2>
                </div>


            </div>
            
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-3">
                <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="h-56 w-full">
                        <a href="#">
                            <img class="mx-auto h-full dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="" />

                        </a>
                    </div>
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">ให้คำปรึกษาฟรี</span>
                            

                            <div class="flex items-center justify-end gap-1">

                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look

                                </div>

                            </div>
                        </div>


                        <h2 class="ext-lg font-semibold leading-tight text-gray-900 dark:text-white">
                            นำเข้าแรงงานคนใหม่ MOU ถูกกฎหมาย
                        </h2>

                        <div class="mt-2 flex items-center gap-2">
                            <div class="flex items-center">
                              ระบบ MOU มีวัตถุประสงค์หลักในการส่งเสริมการนำเข้าแรงงานต่างด้าวอย่างถูกกฎหมาย ซึ่งมีขั้นตอนที่ชัดเจนในการตรวจสอบประวัติและคัดกรองแรงงาน
                            </div>
                        </div>
                        <ul class="mt-2 flex items-center gap-4">
                          
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">ระยะเวลา 15-30 วัน ทำการ</p>
                            </li>
                        </ul>
                        <div class="mt-4 flex items-center justify-between gap-4">
                          <div class="flex items-center mb-2">
                        <img src="{{url('flag/พม่า.png')}}" alt="นำเข้าแรงงานพม่าmou" class="w-8 h-6 mx-1">
                        <img src="{{url('flag/กัมพูชา.png')}}" alt="นำเข้าแรงงานกัมพูชาmou" class="w-8 h-6 mx-1">
                        <img src="{{url('flag/ลาว.png')}}" alt="นำเข้าแรงงานลาวmou" class="w-8 h-6 mx-1">
                    </div>

                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                รายละเอียดบริการ
                            </button>
                        </div>
                    </div>

                </div>










    </section>

    <br>
    <br>
@endsection
