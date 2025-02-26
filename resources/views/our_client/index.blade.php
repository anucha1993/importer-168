@extends('layouts.app-labour')

@section('content')
    <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="./carousel/ลูกค้าของเรา.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
    </div>


    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            {{-- <h5 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-blue-900 dark:text-white md:text-4xl">ลูกค้าที่ไว้วางใจเรา</h5> --}}
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">

                @php
                    $count = 80;
                @endphp

                   @for ($i = 1 ; $i < $count; $i++)
                   <img src="{{url('logo/client/'.$i.'.png')}}" alt="ลูกค้านำเข้าMOU" class="rounded-full mr-2" width="150">       
                   @endfor
               
                                     
              
              
                
                
                
            </div>
        </div>
    </section>
    <br>



   
@endsection
