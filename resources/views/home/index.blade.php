@extends('layouts.app')

@section('content')
    <style>
        /* ตั้งค่าเริ่มต้นสำหรับมือถือ */
        #animation-carousel {
            margin-top: -50px;
        }

        /* สำหรับ Desktop และ Tablet จอใหญ่กว่า 768px */
        @media (min-width: 768px) {
            #animation-carousel {
                margin-top: 0px;
            }
        }
        
    </style>
    
    
      <div id="animation-carousel"class="relative w-full mx-auto max-w-screen-xl mt-[500px]" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

            <div class="hidden duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="./carousel/รับบริการด้านเอกสารแรงงานต่างด้าว-2-importer168.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

            <div class="hidden duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="./carousel/รับบริการด้านเอกสารแรงงานต่างด้าว-importer168.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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



    <section class="py-8 md:py-16 dark:bg-gray-500 antialiased w-full">
        
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden" src="./image-home/license-impoter168-1.webp" style="width: 310px"
                        src="./image-home/license-impoter168-1.webp" alt="" />
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        บริษัท นำคนต่างด้าวมาทำงานในประเทศ
                    </h1>
                    <div class="mt-0 sm:items-center sm:gap-4 sm:flex ">
                        <p class="text-2xl font-extrabold text-blue-900 sm:text-3xl dark:text-white">
                        ดิ อิมพอร์ตเตอร์ 168
                        </p>
                       
                    </div>

                    <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                        <a href="#" title=""
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-blue-900 focus:outline-none bg-yellow-300 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                            </svg>
                         <b>   ติดตาม ข่าวสารจากเรา</b>
                        </a>

                       
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                    <p class="mb-6 text-gray-800 dark:text-gray-400">
                        เราเป็นบริษัท นำคนต่างด้าวมาทำงานในประเทศ ที่จดทะเบียนอนุญาตให้นำเข้าแรงงานต่างด้าว MOU ทั้ง 3 สัญชาติ แรงงานพม่า กัมพูชา ลาว กับกรมการจัดหางาน กระทรวงแรงงาน ตามพระราชกำหนดการนำเข้าคนต่างด้าว พ.ศ.2560
                    </p>

                    <p class="text-gray-800 dark:text-gray-400">
                        สามารถนำเข้าแรงงานและดำเนินการเอกสารทุกรูปแบบเกี่ยวกับต่างด้าว MOU ได้อย่างถูกต้องตามกฎหมายได้ ทั้งนี้ บริษัทฯ ได้วางหลักประกัน กับกรมการจัดหางานเป็นจำนวนเงิน  5,000,000 บาท เป็นที่เรียบร้อย เพื่อเป็นหลักประกันและสร้างความมั่นใจกับทางนายจ้างในการใช้บริการจากเรา รับรองไม่ถูกโกง ได้รับเอกสารครบถ้วน แน่นอน ด้วยสโลแกนการทำงาน ที่ว่า “ด้วยประสบการณ์ และความจริงใจ เชื่อถือได้ พร้อม เต็มใจให้ บริการ” พร้อมดูแลที่เกี่ยวข้องกับแรงงานต่างด้าวให้ครมทุกประเภท ด้วยทีมงานประสบการณ์ กว่า 15 ปี
                    </p>
                </div>
            </div>
        </div>
       
        
    </section>

{{-- ข่าวสาร --}}
<aside aria-label="Related articles" class="py-8 lg:py-10 bg-white dark:bg-gray-800 mx-auto container">
    <div class="px-4 mx-auto max-w-screen-xl ">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white ">บริการของเรา และข่าวสาร</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4 justify-center">
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png" class="mb-5 rounded-lg" alt="Image 1">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">มติ ครม. 24 ก.ย.2567</a>
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    การเปิดขึ้นทะเบียนแรงงานต่างด้าว 2567 โดยยังไม่สามารถดำเนินการได้ ณ ตอนนี้ ต้องรอประกาศกระทรวงแรงงานและ....</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    อ่านเพิ่มเติม..
                </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png" class="mb-5 rounded-lg" alt="Image 2">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">แรงงานต่างด้าวต้องมี ภายใน 31 ต.ค. 2567</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400">สำหรับแรงงานต่างด้าวที่ได้ลงทะเบียนตามมติคณะรัฐมนตรีเมื่อวันที่ 5 กรกฎาคม 2566 </p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    อ่านเพิ่มเติม..
                </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png" class="mb-5 rounded-lg" alt="Image 3">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">นำเข้าแรงงานต่างด้าว MOUลาว (MOU-Return) </a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400">มีแรงงานอยู่ที่ประเทศไทยอยู่แล้วแต่เอกสารหมดอายุ หรือ เอกสารไม่ถูกต้อง</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    อ่านเพิ่มเติม..
                </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png" class="mb-5 rounded-lg" alt="Image 4">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">บริการ ทำเล่มใหม่ กรณี หนังสือเดินทางลาวหมดอายุ</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400">รวมค่าธรรมเนียมและค่าบริการทั้งหมดคนละ 9,000 บาท การชำระเงิน</p>
                <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    อ่านเพิ่มเติม..
                </a>
            </article>
        </div>
    </div>

  </aside>


  <section class="bg-gray-100 py-12">
    <div class="max-w-screen-xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">ทำไมต้องเลือกใช้บริการเรา</h2>
        <p class="text-gray-500 mb-12">
            เข้าถึงจุดเด่นของบริการจากเรา ที่มุ่งเน้นคุณภาพ ราคาประหยัด และการดูแลครบวงจร เพื่อตอบโจทย์ทุกความต้องด้านแรงงานต่างด้าว ของคุณอย่างแท้จริง 
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Highlight 1: บริการรวดเร็ว -->
            <div class="bg-white p-6 rounded-lg shadow-md text-left">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 p-2 rounded-full">
                        <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h3m0 0h3m-3 0V3m0 9l-4-4m4 4l4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-3">บริการรวดเร็ว (Fast Service)</h3>
                </div>
                <p class="text-gray-500">เรารับประกันความรวดเร็วในการดำเนินงาน ทุกกระบวนการได้รับการออกแบบเพื่อให้บริการที่รวดเร็วและทันเวลา</p>
            </div>

            <!-- Highlight 2: ราคาประหยัด -->
            <div class="bg-white p-6 rounded-lg shadow-md text-left">
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 p-2 rounded-full">
                        <svg class="w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-4 0-7 1.686-7 4 0 2.137 2.507 3.872 5.4 4.546C10.067 17.572 11 19.049 11 20h2c0-1.095-.974-2.564-1.4-3.454C16.493 15.872 19 14.137 19 12c0-2.314-3-4-7-4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-3">ราคาประหยัด (Affordable Pricing)</h3>
                </div>
                <p class="text-gray-500">เรามอบบริการที่คุ้มค่าด้วยราคาที่เป็นมิตร เพื่อให้ทุกธุรกิจสามารถเข้าถึงได้</p>
            </div>

            <!-- Highlight 3: ความน่าเชื่อถือสูง -->
            <div class="bg-white p-6 rounded-lg shadow-md text-left">
                <div class="flex items-center mb-4">
                    <div class="bg-yellow-100 p-2 rounded-full">
                        <svg class="w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c4.418 0 8-1.5 8-3.5S16.418 1 12 1 4 2.5 4 4.5 7.582 8 12 8zm0 0v10m0 0l4-4m-4 4l-4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-3">ความน่าเชื่อถือสูง (Reliable and Trusted)</h3>
                </div>
                <p class="text-gray-500">เรายึดมั่นในการให้บริการอย่างมีจรรยาบรรณและโปร่งใส สร้างความเชื่อมั่นในทุกขั้นตอน</p>
            </div>

            <!-- Highlight 4: ทีมงานมืออาชีพ -->
            <div class="bg-white p-6 rounded-lg shadow-md text-left">
                <div class="flex items-center mb-4">
                    <div class="bg-purple-100 p-2 rounded-full">
                        <svg class="w-6 h-6 text-purple-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16m-4-4h-8m0 4v18" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-3">ทีมงานมืออาชีพ (Professional Team)</h3>
                </div>
                <p class="text-gray-500">ทีมงานของเรามีประสบการณ์และความเชี่ยวชาญ พร้อมดูแลคุณด้วยมาตรฐานสูงสุด</p>
            </div>

            <!-- Highlight 5: การดูแลครบวงจร -->
            <div class="bg-white p-6 rounded-lg shadow-md text-left">
                <div class="flex items-center mb-4">
                    <div class="bg-red-100 p-2 rounded-full">
                        <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-12H3l9 12z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-3">การดูแลครบวงจร (Comprehensive Support)</h3>
                </div>
                <p class="text-gray-500">เราดูแลทุกขั้นตอน ตั้งแต่เริ่มต้นจนถึงหลังการบริการ เพื่อความพึงพอใจสูงสุดของคุณ</p>
            </div>

            <!-- Highlight 6: บริการหลังการขาย -->
            <div class="bg-white p-6 rounded-lg shadow-md text-left">
                <div class="flex items-center mb-4">
                    <div class="bg-indigo-100 p-2 rounded-full">
                        <svg class="w-6 h-6 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v16M20 4v16" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-3">บริการหลังการขาย (After-Sales Support)</h3>
                </div>
                <p class="text-gray-500">เราพร้อมให้คำแนะนำและสนับสนุนหลังการขาย เพื่อให้คุณได้รับประสบการณ์ที่ดีที่สุด</p>
            </div>

            <!-- Highlight 7: ปรับบริการได้ตามต้องการ -->
            <div class="bg-white p-6 rounded-lg shadow-md text-left">
                <div class="flex items-center mb-4">
                    <div class="bg-teal-100 p-2 rounded-full">
                        <svg class="w-6 h-6 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16M4 6h8m-8 6v6m0 6h8m0 0v-6m8 6h4m-4-6h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-3">ปรับบริการได้ตามต้องการ (Flexible Solutions)</h3>
                </div>
                <p class="text-gray-500">เราออกแบบบริการให้สามารถปรับตามความต้องการเฉพาะของลูกค้าได้</p>
            </div>

            <!-- Highlight 8: ใช้งานง่ายและสะดวก -->
            <div class="bg-white p-6 rounded-lg shadow-md text-left">
                <div class="flex items-center mb-4">
                    <div class="bg-orange-100 p-2 rounded-full">
                        <svg class="w-6 h-6 text-orange-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16M4 12h16M4 20h16" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-3">ใช้งานง่ายและสะดวก (User-Friendly Process)</h3>
                </div>
                <p class="text-gray-500">ขั้นตอนการใช้งานไม่ซับซ้อน และได้รับการออกแบบมาเพื่อความสะดวกของลูกค้า</p>
            </div>

            <!-- Highlight 9: เน้นการสื่อสารที่ชัดเจน -->
            <div class="bg-white p-6 rounded-lg shadow-md text-left">
                <div class="flex items-center mb-4">
                    <div class="bg-cyan-100 p-2 rounded-full">
                        <svg class="w-6 h-6 text-cyan-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16m-8 6H4m8-6v10m0-10h4m0 10v-6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 ml-3">เน้นการสื่อสารที่ชัดเจน (Clear Communication)</h3>
                </div>
                <p class="text-gray-500">เราสื่อสารกับลูกค้าอย่างชัดเจนในทุกขั้นตอนเพื่อความเข้าใจที่ตรงกัน</p>
            </div>

        </div>
    </div>
</section>



  <br>
  <br>

  
@endsection



