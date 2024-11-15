@extends('layouts.app-labour')

@section('content')
    <br>
    <div id="animation-carousel"class="relative w-full mx-auto max-w-screen-xl " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="{{ url('carousel/รับบริการด้านเอกสารแรงงานต่างด้าว-2-importer168.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="{{url('carousel/รับบริการด้านเอกสารแรงงานต่างด้าว-importer168.webp')}}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="บริการนำเข้าแรงงานต่างด้าวMOU">
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

                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">เลือกบริการของเรา</h2>
                </div>


            </div>

            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-3">
                @foreach ($services as $service)
                    
                <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">

                    <div class="flex justify-center mx-4 items-center">
                        <img src="{{ url($service->image_path) }}" alt="ประกอบการให้บริการแรงงานต่างด้าว" class="rounded-lg shadow-md" style="width: 1800px">
                    </div>
                    
                    <div class="pt-6">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">ให้คำปรึกษาฟรี</span>


                            <div class="flex items-center justify-end gap-1">

                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look

                                </div>

                            </div>
                        </div>


                        <h2 class="ext-lg font-semibold leading-tight text-gray-900 dark:text-white">
                           {!! $service->name !!}
                        </h2>

                        <div class="mt-2 flex items-center gap-2">
                            <div class="flex items-center">
                                {!! Str::limit(strip_tags(preg_replace('/<img[^>]+>/i', '', $service->details)), 150) !!}
                               
                            </div>
                        </div>
                        <ul class="mt-2 flex items-center gap-4">

                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400"> {!! $service->nationality !!}</p>
                            </li>
                        </ul>
                        <div class="mt-4 flex items-center justify-between gap-4">
                            <div class="flex items-center mb-2">
                                @php
                                $flags = json_decode($service->flag, true); // แปลง JSON เป็น array
                            @endphp
                        
                            @if (is_array($flags))
                                @foreach ($flags as $flag)
                                    <img src="{{ url($flag) }}" alt="นำเข้าแรงงานพม่าmou" class="w-8 h-6 mx-1">
                                @endforeach
                            @else
                                <p>ไม่มีรูปภาพ</p>
                            @endif

                             
                            </div>
                            <a href="javascript:void(0);" data-id="{{ $service->id }}" data-modal-target="import-modal"
                                data-modal-toggle="import-modal"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 modal-trigger">
                                ดูรายละเอียด
                            </a>
                        </div>
                    </div>

                </div>
                @endforeach


    </section>

    <br>
    <br>

    <div id="import-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center overflow-y-auto overflow-x-hidden h-modal md:h-full bg-blue-50 bg-opacity-75">
        <div class="relative p-4 w-full max-w-4xl h-full md:h-auto ">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
                <!-- Modal Header -->
               


                <!-- Modal Body -->
                <div class=" modal-body  ">
                    
                    <!-- Dynamic content will be loaded here -->
                </div>

                <!-- Modal Footer -->
                <div
                    class="flex items-center justify-end p-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="button" data-modal-hide="import-modal"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">ปิด</button>
                </div>
            </div>
        </div>
    </div>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Open modal on trigger click
            document.querySelectorAll('.modal-trigger').forEach(item => {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    const serviceId = this.getAttribute('data-id');

                    // Fetch modal content with AJAX
                    fetch(`/services/${serviceId}/modal`)
                        .then(response => response.json())
                        .then(data => {
                            // Insert fetched content into modal body
                            document.querySelector('#import-modal .modal-body').innerHTML = data
                                .htmlContent;

                            // Show the modal
                            const modal = document.getElementById('import-modal');
                            modal.classList.remove(
                            'hidden'); // Show modal by removing 'hidden' class
                        })
                        .catch(error => console.error('Error loading modal content:', error));
                });
            });

            // Close modal when close button or outside click
            document.querySelectorAll('[data-modal-hide="import-modal"]').forEach(item => {
                item.addEventListener('click', function() {
                    const modal = document.getElementById('import-modal');
                    modal.classList.add('hidden'); // Hide modal by adding 'hidden' class
                });
            });

            // Optional: close modal when clicking outside the modal content
            document.getElementById('import-modal').addEventListener('click', function(event) {
                if (event.target === this) {
                    this.classList.add('hidden'); // Hide modal by adding 'hidden' class
                }
            });
        });
    </script>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
