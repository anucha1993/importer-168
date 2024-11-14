@extends('layouts.app-labour')

@section('content')
    <style>
        .article-content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            /* จัดตำแหน่งภาพให้อยู่ตรงกลาง */
        }
    </style>

        <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl" data-carousel="static">
               <!-- Carousel wrapper -->
               <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                   <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                       <img src="{{URL::asset('./carousel/ข่าวสาร และความรู้แรงงานต่างด้าว.webp')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                   </div>
               </div>
           </div>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full border-2 border-gray-100"
                                src="{{ URL::asset('images/contact/impoter-จิรวัฒน์.svg') }}" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white"> เขียนโดย : จิรวัฒน์ (เจมส์)</a>
                                <p class="text-base text-gray-500 dark:text-gray-400"> กรรมการ และผู้จัดการการตลาด TIP168
                                    </p>
                                <p class="text-base text-gray-500 dark:text-gray-400">
                                    <time pubdate datetime="2022-02-08" title="February 8th, 2022"> {{thaidate('l j F Y', $article->created_at)}}</time>
                                </p>
                            </div>
                        </div>

                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $article->title }}</h1>
                        <div class="mt-6 sm:mt-8 lg:mt-0">
                              <img src="{{ asset($article->image_path) }}" alt="{{ $article->title }}">
                          </div>
                </header>
                {!! $article->content !!}

            </article>
        </div>
    </main>

    <br>
    <br>
@endsection
