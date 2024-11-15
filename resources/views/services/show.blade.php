@extends('layouts.app-labour')

@section('content')
    <br>
    <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl " data-carousel="static">
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
    </div>
    <br>



@endsection
