@extends('layouts.app')

@section('content')

    
    
      <div id="animation-carousel"class="relative w-full mx-auto max-w-screen-xl " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="./carousel/รับบริการด้านเอกสารแรงงานต่างด้าว-2-importer168.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="รับบริการด้านเอกสารแรงงานต่างด้าว">
            </div>
            
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="./carousel/รับบริการด้านเอกสารแรงงานต่างด้าว-importer168.webp "
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



    <section class="py-8 md:py-16 dark:bg-gray-500 antialiased w-full">
        
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden" src="./image-home/license-impoter168-1.webp" style="width: 310px"
                        src="./image-home/license-impoter168-1.webp" alt="ใบอนุญาตนำเข้าแรงงานต่างด้าว" />
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


    


    

    <section class="py-12 bg-white mt-[-50px]">
        <div class="max-w-screen-xl mx-auto px-4 text-center">
            
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1 -->

                <div class="bg-white rounded-lg shadow-md p-6 text-left">
                    <a href="{{url('articles/4')}}">
                    <img src="{{url('./storage/uploads/1731313859_บริการนำเข้าแรงงานต่างด้าวMOU.webp')}}" alt="บริการนำเข้าแรงงานต่างด้าวMOU นำเข้าแรงงานต่างด้าวถูกกฎหมาย" class="mb-4 rounded-lg w-full">
                </a>
                    <div class="flex items-center mb-2">
                        <img src="./images/contact/impoter-จิรวัฒน์.svg" alt="จิรวัฒน์" class="w-8 h-8 rounded-full mr-2">

                        <div>
                            <p class="text-gray-900 font-medium">จิรวัฒน์</p>
                            <p class="text-gray-500 text-sm"> 15 สิงหาคม 2024 · 16 min read</p>
                        </div>

                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">การนำเข้าแรงงานต่างด้าวตามระบบ MOU เพื่อการทำงานในประเทศไทย</h3>
                    <p class="text-gray-700 mb-4">
                        ระบบ MOU มีวัตถุประสงค์หลักในการส่งเสริมการนำเข้าแรงงานต่างด้าวอย่างถูกกฎหมาย ซึ่งมีขั้นตอนที่ชัดเจนในการตรวจสอบประวัติและคัดกรองแรงงานเพื่อป้องกันปัญหาการลักลอบนำเข้าแรงงาน
                    </p>
                    <a href="{{url('articles/4')}}" class="text-blue-600 hover:underline font-medium">อ่านเพิ่มเติม →</a>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 text-left">
                    <a href="{{url('articles/3')}}">
                    <img src="{{url('storage/uploads/1731308241_บนจ. (3).webp')}}" alt="คนงานต่างด้าว การจ้างแรงงานต่างด้าว" class="mb-4 rounded-lg w-full">
                    </a>
                    <div class="flex items-center mb-2">
                        <img src="/images/contact/importer-สุจิตา.svg" alt="นำเข้าแรงงานต่างด้าว 3 สัญชาติ พม่า กัมพูชา ลาว ด้วยระบบ MOU" class="w-8 h-8 rounded-full mr-2">
                        <div>
                            <p class="text-gray-900 font-medium">สุจิตา</p>
                            <p class="text-gray-500 text-sm"> 05 ตุลาคม 2024 · 5 min read</p>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">การต่อวีซ่า(ปีที่3-4) แรงงานต่างด้าว MOU ที่ครบ 2 ปี ในประเทศไทย</h3>
                    <p class="text-gray-700 mb-4">บริการต่ออายุเอกสารแรงงานต่างด้าว ครอบคลุมทุกขั้นตอนที่จำเป็นในการทำให้ถูกต้องตามกฎหมาย.</p>
                    <a href="{{url('articles/3')}}" class="text-blue-600 hover:underline font-medium">อ่านเพิ่มเติม →</a>
                </div>
    
                <!-- Service 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 text-left">
                    <a href="{{url('articles/2')}}">
                    <img src="{{url('./storage/uploads/3ข้อควรรู้ก่อนรายงานตัว90วัน.webp')}}" alt="MOU ลาว,ใบอนุญาตทำงาน" class="mb-4 rounded-lg w-full">
                    </a>
                    <div class="flex items-center mb-2">
                        <img src="./images/contact/impoter-พัชรีพร.svg" alt="Author 3" class="w-8 h-8 rounded-full mr-2">
                        <div>
                            <p class="text-gray-900 font-medium">พัชรีพร</p>
                            <p class="text-gray-500 text-sm">11 พฤศจิการยน 2024 · 20 min read</p>
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-2">3 ข้อความรู้ก่อน การรายงานตัว 90 วัน</h3>
                    <p class="text-gray-700 mb-4">
                        การรายงานตัว 90 วันเป็นขั้นตอนสำคัญที่แรงงานต่างด้าวทุกคนที่อาศัยและทำงานในประเทศไทยต้องปฏิบัติตาม เพื่อให้แน่ใจว่าการอยู่อาศัยในประเทศเป็นไปตามกฎหมายที่กำหนด
                    </p>
                    <a href="{{url('articles/2')}}" class="text-blue-600 hover:underline font-medium">อ่านเพิ่มเติม →</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h5 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-blue-900 dark:text-white md:text-4xl">ลูกค้าที่ไว้วางใจเรา</h5>
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
               
                    <img src="{{url('logo-customers/Logo-Tyson.svg')}}" alt="ลูกค้านำเข้าMOU" class="rounded-full mr-2" width="150">                        
              
              
                    <img src="{{url('logo-customers/Logo-Foodland.svg')}}" alt="ลูกค้านำเข้า คนต่างด้าวMOU" class="rounded-full mr-2" width="150">                        
              
                
               
                    <img src="{{url('logo-customers/Logo-เอพลัส.svg')}}" alt="ลูกค้านำเข้า คนต่างด้าวMOU" class="rounded-full mr-2" width="150">                        
               
               
                    <img src="{{url('logo-customers/Logo-AJPLAST.svg')}}" alt="ลูกค้านำเข้า คนต่างด้าวMOU" class="rounded-full mr-2" width="150">                        
               
                
                    <img src="{{url('logo-customers/Logo-colt.svg')}}" alt="ลูกค้านำเข้า คนต่างด้าวMOU" class="rounded-full mr-2" width="150">                        
              
                
                    <img src="{{url('logo-customers/Logo-DominoPizza.svg')}}" alt="ลูกค้านำเข้า คนต่างด้าวMOU" class="rounded-full mr-2" width="150">                        
                
                
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-100">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-4">ทำไมต้องแรงงานต่างด้าว ? </h2>
            <p class="text-gray-500 text-center mb-5">
                เราดำเนินการตามระเบียบและข้อบังคับของกระทรวงแรงงาน และทำให้การนำเข้าแรงงานเป็นไปตามกระบวนการ MOU ที่ถูกต้องทุกขั้นตอน
            </p>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Main Article -->
                <div class="lg:col-span-1 bg-white p-6 rounded-lg shadow-md">
                    <img src="{{url('image-home/ให้คำปรึกษาเรื่องต่างด้าว.webp')}}" alt="Featured Article Image" class="rounded-lg mb-6 w-full">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">นำเข้า MOU 3 สัญชาติ</h3>
                    <p class="text-gray-500 mb-4">
                        การนำเข้าแรงงานที่มีคุณภาพและถูกกฎหมายเป็นสิ่งสำคัญที่ช่วยเสริมศักยภาพของธุรกิจ เรานำเสนอการบริการนำเข้าแรงงานจากสามประเทศ ได้แก่ พม่า กัมพูชา และลาว ด้วยความเชี่ยวชาญและประสบการณ์ เพื่อให้คุณได้แรงงานที่มีคุณภาพตรงกับความต้องการ
                    </p>
                    {{-- <a href="#" class="text-blue-600 hover:underline font-medium">Read more →</a> --}}
                </div>
                
                <!-- Side Articles -->
                <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border-b pb-4">
                        <h4 class="text-lg font-bold text-gray-900">
                            <a href="#" class="hover:underline">นำเข้าแรงงานเมียนมา (พม่า)</a>
                        </h4>
                        <p class="text-gray-500 text-sm mb-2">
                            การนำเข้าแรงงานพม่าเป็นที่นิยมในการทำงานในหลากหลายอุตสาหกรรม ไม่ว่าจะเป็นงานก่อสร้าง การเกษตร โรงงาน สายการผลิต หรืองานบริการต่างๆ โดยมักได้รับความไว้วางใจจากนายจ้าง ด้วยนิสัยขยันขันแข็ง มีความอดทน ตั้งใจทำงาน และอ่อนน้อมถ่อมตน ลดปัญหาการลาออก
                        </p>
                        {{-- <a href="#" class="text-blue-600 hover:underline font-medium text-sm">Read more →</a> --}}
                    </div>

                    <div class="border-b pb-4">
                        <h4 class="text-lg font-bold text-gray-900">
                            <a href="#" class="hover:underline">บริการนำเข้าแรงงาน (กัมพูชา)</a>
                        </h4>
                        <p class="text-gray-500 text-sm mb-2">
                            แรงงานกัมพูชามักมาพร้อมกับทักษะ ประสบการณ์ และความเชี่ยวชาญในด้านการเกษตรหลากหลายประเภท รวมไปถึงงานในภาคอุตสาหกรรม ก่อสร้าง โรงงานอุตสาหกรรม และการผลิต นอกจากนี้แรงงานกัมพูชามีชื่อเสียงเรื่องความซื่อสัตย์ รักความสะอาด อ่อนน้อมถ่อมตน รัก และทุ่มเทให้กับครอบครัว
                        </p>
                        {{-- <a href="#" class="text-blue-600 hover:underline font-medium text-sm">Read more →</a> --}}
                    </div>
                    <div class="border-b pb-4">
                        <h4 class="text-lg font-bold text-gray-900">
                            <a href="#" class="hover:underline">บริการนำเข้าแรงงาน (ลาว)</a>
                        </h4>
                        <p class="text-gray-500 text-sm mb-2">
                            แรงงานลาวขึ้นชื่อเรื่องความมีน้ำใจ และความทุ่มเทในการทำงาน มักแสดงท่าทีสุภาพ และให้ความเคารพ ทั้งหัวหน้างาน และเพื่อนร่วมงาน งานบริการจึงเป็นงานที่เหมาะสม เพราะมีข้อได้เปรียบทางด้านภาษา สามารถสื่อสารกับลูกค้าได้ง่าย และเข้าใจ อีกทั้งยังมีอัธยาศัยดี และยิ้มแย้มง่าย ช่วยสร้างความประทับใจให้กับลูกค้า และสร้างบรรยากาศที่ดีในการทำงาน
                        </p>
                        {{-- <a href="#" class="text-blue-600 hover:underline font-medium text-sm">Read more →</a> --}}
                    </div>
                    <div class="border-b pb-4">
                        <h4 class="text-lg font-bold text-gray-900">
                            <a href="#" class="hover:underline">แรงงานต่างด้าวคุณภาพสูง</a>
                        </h4>
                        <p class="text-gray-500 text-sm mb-2">
                            เรามีความเชี่ยวชาญในการคัดเลือกแรงงานต่างด้าวที่มีทักษะและความสามารถตรงกับความต้องการของธุรกิจในประเทศไทย แรงงานต่างด้าวที่คัดสรรมาผ่านการคัดกรองอย่างเข้มงวด ไม่ว่าจะเป็นประสบการณ์การทำงาน ความรับผิดชอบ รวมถึงความพร้อมในการทำงาน เรายังมีการฝึกอบรมเบื้องต้นเพื่อให้แรงงานต่างด้าวพร้อมที่จะเข้าร่วมกับธุรกิจของคุณตั้งแต่วันแรก
                        </p>
                        {{-- <a href="#" class="text-blue-600 hover:underline font-medium text-sm">Read more →</a> --}}
                    </div>
                    <div class="border-b pb-4">
                        <h4 class="text-lg font-bold text-gray-900">
                            <a href="#" class="hover:underline">มั่นใจในความปลอดภัยและสวัสดิการของแรงงานต่างด้าว</a>
                        </h4>
                        <p class="text-gray-500 text-sm mb-2">เราให้ความสำคัญกับสุขภาพและความปลอดภัยของแรงงานต่างด้าวทุกคนที่นำเข้ามาผ่านบริการของเรา แรงงานต่างด้าวจะต้องผ่านการตรวจสุขภาพและมีเอกสารต่างด้าวด้านการแพทย์ที่ครบถ้วนก่อนการทำงานในประเทศไทย เรามีการจัดเตรียมประกันสุขภาพและประกันอุบัติเหตุสำหรับแรงงานต่างด้าว เพื่อให้พวกเขาสามารถทำงานได้อย่างมั่นใจและปลอดภัย นอกจากนี้ เรายังมีนโยบายความปลอดภัยและมาตรการควบคุมการทำงานเพื่อช่วยลดความเสี่ยงจากอุบัติเหตุหรือปัญหาสุขภาพต่าง ๆ ในระหว่างการทำงาน</p>
                        {{-- <a href="#" class="text-blue-600 hover:underline font-medium text-sm">Read more →</a> --}}
                    </div>
                    <div class="border-b pb-4">
                        <h4 class="text-lg font-bold text-gray-900">
                            <a href="#" class="hover:underline">ถูกต้องตามกฎหมาย</a>
                        </h4>
                        <p class="text-gray-500 text-sm mb-2">
                            เราดำเนินการนำเข้าแรงงานผ่านกระบวนการ MOU ตามระเบียบและข้อบังคับของกระทรวงแรงงานในประเทศไทย โดยเราเป็นผู้จัดการจัดเตรียมเอกสารและใบอนุญาตทั้งหมด ตั้งแต่การขอใบอนุญาตทำงานไปจนถึงการลงทะเบียนประกันสังคมให้กับแรงงาน ซึ่งจะช่วยให้การนำเข้าแรงงานเป็นไปอย่างถูกต้องตามกฎหมายและไม่เสี่ยงต่อการถูกดำเนินคดี นอกจากนี้ เรายังมีบริการให้คำปรึกษาในด้านกฎหมายการจ้างงานเพื่อช่วยให้ธุรกิจของคุณสามารถปฏิบัติตามระเบียบข้อบังคับอย่างเคร่งครัด
                        </p>
                        {{-- <a href="#" class="text-blue-600 hover:underline font-medium text-sm">Read more →</a> --}}
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    

{{-- ข่าวสาร --}}
<aside aria-label="Related articles" class="py-8 lg:py-10 bg-white dark:bg-gray-800 mx-auto container">
    <div class="px-4 mx-auto max-w-screen-xl ">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white ">บริการของเรา และข่าวสาร</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4 justify-center">


            @foreach ($articles as $article)
                
            <article class="max-w-xs">
                <a href="{{url('articles/'.$article->id)}}">
                    <img src="{{url($article->image_path)}}" class="mb-5 rounded-lg" alt="Image 1">
                </a>
                <h5 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">{{$article->title}}</a>
                </h5>
                
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    {!! Str::limit(strip_tags(preg_replace('/<img[^>]+>/i', '', $article->content)), 120) !!}
                </p>
                <a href="{{url('articles/'.$article->id)}}" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    อ่านเพิ่มเติม..
                </a>
            </article>
            @endforeach

            {{-- <article class="max-w-xs">
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
            </article> --}}
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
                <p class="text-gray-500">
                    เราดำเนินการนำเข้าแรงงานต่างด้าวและต่ออายุเอกสารด้วยความรวดเร็ว พร้อมช่วยเหลือทุกขั้นตอนตั้งแต่เริ่มต้นเพื่อให้มั่นใจว่าแรงงานต่างด้าวสามารถเริ่มทำงานได้ทันทีโดยไม่ติดขัด
                </p>
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
                <p class="text-gray-500">
                    เรามุ่งเน้นการให้บริการนำเข้าแรงงานต่างด้าวด้วยราคาที่คุ้มค่า เพื่อช่วยลดต้นทุนในการจัดการแรงงานต่างด้าวอย่างมีประสิทธิภาพ
                </p>
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
                <p class="text-gray-500">
                    ด้วยประสบการณ์หลายปีในการจัดการเอกสารและการดูแลแรงงานต่างด้าว เราได้รับความไว้วางใจจากลูกค้าและคู่ค้าที่มองหาบริการแรงงานต่างด้าวที่มีคุณภาพและปลอดภัย
                </p>
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
                <p class="text-gray-500">
                    ทีมงานของเราเชี่ยวชาญในการนำเข้าแรงงานต่างด้าวและการต่ออายุเอกสาร พร้อมให้คำแนะนำที่แม่นยำและครอบคลุม
                </p>
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
                <p class="text-gray-500">
                    เรามีบริการดูแลแรงงานต่างด้าวแบบครบวงจร ทั้งในส่วนของการนำเข้า ต่ออายุเอกสาร และการดูแลแรงงานต่างด้าวในรูปแบบกึ่งซับคอนแทรคเตอร์ เพื่อให้คุณมีเวลามุ่งเน้นในธุรกิจของคุณมากขึ้น
                </p>
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
                <p class="text-gray-500">
                    เรามีการติดตามและให้บริการหลังการขายเพื่อให้มั่นใจว่าแรงงานต่างด้าวของคุณได้รับการดูแลต่อเนื่อง และสามารถทำงานได้อย่างราบรื่น
                </p>
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
                <p class="text-gray-500">
                    เรายืดหยุ่นในการให้บริการนำเข้าและดูแลแรงงานต่างด้าวตามความต้องการของลูกค้า เพื่อให้เหมาะสมกับแต่ละอุตสาหกรรม
                </p>
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
                <p class="text-gray-500">
                    ด้วยกระบวนการที่ออกแบบมาให้ใช้งานง่ายและไม่ซับซ้อน ลูกค้าสามารถดำเนินการเอกสารและการนำเข้าแรงงานต่างด้าวได้อย่างสะดวกและรวดเร็ว
                </p>
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
                <p class="text-gray-500">
                    เราให้ความสำคัญกับการสื่อสารที่โปร่งใสและชัดเจน เพื่อให้ลูกค้าทราบถึงความคืบหน้าและขั้นตอนในการนำเข้าแรงงานต่างด้าวและการจัดการเอกสาร
                </p>
            </div>

        </div>
    </div>
</section>


<section class="bg-white py-12">
    <div class="max-w-screen-xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">ผลงานและสถิติที่สำคัญ</h2>
        <p class="text-gray-500 mb-12">
            ด้วยประสบการณ์และความเชี่ยวชาญในการนำเข้าแรงงานต่างด้าว ต่ออายุเอกสาร และการดูแลแรงงานกึ่งซับคอนแทรคเตอร์ เราภูมิใจในความสำเร็จและความไว้วางใจจากลูกค้าของเรา
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Statistic 1 -->
            <div class="bg-blue-100 p-6 rounded-lg shadow-md text-center">
                <div class="text-blue-500 text-5xl font-bold mb-2">2000+ คน</div>
                <p class="text-xl font-semibold text-gray-900">ปีแห่งประสบการณ์</p>
                <p class="text-gray-500">ในด้านการนำเข้าและดูแลแรงงานต่างด้าว</p>
            </div>

            <!-- Statistic 2 -->
            <div class="bg-green-100 p-6 rounded-lg shadow-md text-center">
                <div class="text-green-500 text-5xl font-bold mb-2">120+ ราย</div>
                <p class="text-xl font-semibold text-gray-900">ลูกค้าพึงพอใจ</p>
                <p class="text-gray-500">ที่ไว้วางใจในการให้บริการของเรา</p>
            </div>

            <!-- Statistic 3 -->
            <div class="bg-yellow-100 p-6 rounded-lg shadow-md text-center">
                <div class="text-yellow-500 text-5xl font-bold mb-2">2500+ คน</div>
                <p class="text-xl font-semibold text-gray-900">ดำเนินการด้านเอกสาร</p>
                <p class="text-gray-500">ทั้งการนำเข้าและต่ออายุเอกสารแรงงานต่างด้าว</p>
            </div>
        </div>
    </div>
</section>


<section class="bg-gray-100 py-1">
    <div class="max-w-screen-xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-6"></h2>
        <p class="text-gray-600 text-lg mb-12">
            แสดงถึงความสำเร็จในการให้บริการนำเข้าแรงงานต่างด้าว ต่ออายุเอกสาร และบริการแรงงานกึ่งซับคอนแทรคเตอร์ของเรา
        </p>

        <div class="max-w-lg mx-auto">
            {{-- <canvas id="serviceChart" width="400" height="200"></canvas> --}}
            
<div class=" w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 mb-12">
    <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
      <div class="flex items-center">
        <div class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
          <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
            <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
            <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
          </svg>
        </div>
        <div>
          <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">4.5k</h5>
          <p class="text-sm font-normal text-gray-500 dark:text-gray-400">การให้บริการด้านแรงงานต่างด้าว</p>
        </div>
      </div>
      <div>
        <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
          <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
          </svg>
          90.5%
        </span>
      </div>
    </div>
  
    <div class="grid grid-cols-2">
      <dl class="flex items-center">
          <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">ดูแลแรงงานต่างด้าว</dt>
          <dd class="text-gray-900 text-sm dark:text-white font-semibold">2,000+ คน</dd>
      </dl>
      <dl class="flex items-center justify-end">
          <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">ดำเนินการด้านเอกสาร</dt>
          <dd class="text-gray-900 text-sm dark:text-white font-semibold">2,500 + คน</dd>
      </dl>
    </div>
  
    <div id="column-chart"></div>
      <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
        <div class="flex justify-between items-center pt-5">
          <!-- Button -->
         
          
         
        </div>
      </div>
  </div>

  
        </div>
    </div>
</section>


<section class="bg-white py-8">
    <div class="max-w-screen-md mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">คำถามที่พบบ่อย ?</h2>
        <div class="divide-y divide-gray-200">
            <!-- Question 1 -->
            <div class="py-4">
                <button class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none" onclick="toggleAccordion(this)">
                    <span>แรงงานกลุ่มMOU นี้ต่างกับแรงงานกลุ่มเดิม ที่อยู่ในประเทศอย่างไร?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="pt-2 text-gray-600 text-sm hidden">
                    เป็นแรงงานต่างด้าวเหมือนกัน แต่อาจจะเข้ามาทำงานในประเทศไทย แบบทั้งที่ถูกกฎหมายและผิดกฎหมาย แรงงานที่ถูกกฎหมาย(เคยผิดกฎหมายมาก่อน) นั้น อาจได้รับการอยู่ในประเทศโดยผ่านการขึ้นทะเบียน ทำพาสปอร์ต และบัตรชมพู หรือที่รู้จักกันในนาม แรงงานกลุ่มพิสูจน์สัญชาติ(บัตรชมพู) ซึ่งเดิมกลุ่มที่ครบวีซ่า 4 ปี ต้องกลับไปประเทศต้นทาง เพื่อดำเนินการนำเข้า MOU แต่ด้วยภาวะโรคระบาดเลยเปิดขึ้นทะเบียนในประเทศไทยไปก่อน จนกว่าสถานการณ์จะดีขึ้น
                </div>
            </div>

            <!-- Question 2 -->
            <div class="py-4">
                <button class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none" onclick="toggleAccordion(this)">
                    <span>ปลอดภัยแค่ไหน กับการจ้างแรงงานกลุ่ม MOU ?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="pt-2 text-gray-600 text-sm hidden">
                    ท่านสามารถวางใจได้ แรงงานทุกคนที่บริษัทของเรานำเข้ามาทุกคนนั้น ถูกกฎหมายเอกสารชัดเจน ตรวจสอบได้ ตัวแรงงานเองนั้นผ่านการคัดกรอง อบรม และทำความเข้าใจในรายละเอียดงานทุกคน จากภาพงาน และรายละเอียดงาน ที่ทางเราขอจากทางนายจ้าง และอีกประการสำคัญ แรงงานทุกคนมีความคาดหวังกับการทำงาน ต้องการหาเงินเพื่อส่งกลับจุนเจือครอบครัวที่ยากจน ตั้งใจมาทำงาน ไม่สร้างปัญหาและภาระให้กับนายจ้าง จึงปลอดภัยและสบายใจ ว่าใช้แรงงานต่างด้าวถูกกฎหมาย มั่นใจได้ว่าใช้แรงงานกลุ่มนี้ปลอดใต้โต๊ะ
                </div>
            </div>

            <!-- Question 3 -->
            <div class="py-4">
                <button class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none" onclick="toggleAccordion(this)">
                    <span>นายจ้างต้องทำอย่างไรเมื่อต้องการจ้างแรงงาน MOU ?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="pt-2 text-gray-600 text-sm hidden">
                    ไม่ต้องวุ่นวายการยื่นเอกสาร ทุกขั้นตอนการนำเข้าแรงงานนี้ ทาง บนจ.ดิ อิมพอร์ตเตอร์ 168 จำกัด ของเราจะเป็นผู้ดำเนินการให้ทุกขั้นตอน ตลอดจนดำเนินการด้านเอกสารให้ครบถ้วน เพียงแต่นายจ้างต้องจัดเตรียมเอกสารที่ใช้ประกอบการนำเข้า ดังรายละเอียดที่จะจัดส่งให้ หลังจากนั้นทางเรา จะดำเนินการให้ ครบทุกขั้นตอน เอกสารครบถ้วนตามกฎหมาย
                </div>
            </div>

             <!-- Question 3 -->
             <div class="py-4">
                <button class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none" onclick="toggleAccordion(this)">
                    <span>งานไม่มีโอที(O.T.) จ้าง MOU ได้หรือไม่ ?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="pt-2 text-gray-600 text-sm hidden">
                    จ้างได้ แต่ หากจ้างไปสักระยะหนึ่ง แล้วไม่มีโอที (บางช่วงเวลา) แรงงานพอเข้าใจได้กับ เนื้องาน หากเป็นงานที่ไม่มีโอทีตั้งแต่แรกเลย อาจจะค่อนข้างลำบากในการหาผู้สมัครงาน เนื่องจากแรงงานกลุ่มนี้ คาดหวังรายได้จากเงินเดือนเพื่อส่งกลับทางบ้าน ส่วน โอทีนั้นจะเก็บไว้เป็นค่าใช้จ่ายประจำเดือน หากไม่มีโอที อาจจะทำงานได้ไม่นาน อาจขอกลับก่อนครบสัญญาหรือหลบหนีไปในที่สุด เพราะด้วยรายได้ไม่พอส่งทางบ้าน ไม่สามารถทำงานได้ในระยะยาวๆ ทำให้นายจ้างเสียเวลาฝึกฝนแรงงานใหม่อีก
                </div>
            </div>

             <!-- Question 3 -->
             <div class="py-4">
                <button class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none" onclick="toggleAccordion(this)">
                    <span>สวัสดิการที่นายจ้างต้องจ่ายมีอะไรบ้างและต้องปฏิบัติตนอย่างไร ?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="pt-2 text-gray-600 text-sm hidden">
                    แรงงานทุกคน สมควรได้รับการปฏิบัติเช่นแรงงานไทยเลย คือได้รับสวัสดิการตามที่กฎหมายคุ้มครองแรงงานไทยกำหนด เช่น ค่าแรงขั้นต่ำ ,ค่าแรงทำงานนอกเวลา, วันหยุดประจำสัปดาห์ ฯ,วันหยุดประเพณี(นักขัตฤกษ์) 13 วัน หากนายจ้างมีสวัสดิการอื่นๆที่มีอยู่แล้ว ก็สามารถจ่ายให้กับแรงงานต่างด้าวได้ เช่น ค่าครองชีพ เบี้ยขยัน ค่ากะ ค่าตำแหน่ง ค่าเสี่ยงภัย ค่าชิ้นงาน หรืออื่นๆ ตามที่มี ส่วนเรื่องที่พัก ค่าน้ำ-ค่าไฟ นายจ้าง เป็นผู้จัดและให้แรงงานเป็นผู้จ่ายเองรายเดือนได้
                </div>
            </div>

              <!-- Question 3 -->
              <div class="py-4">
                <button class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none" onclick="toggleAccordion(this)">
                    <span>ต้องยื่นประกันสังคม ให้กับแรงงานกลุ่มนี้หรือไม่ ?</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="pt-2 text-gray-600 text-sm hidden">
                    นายจ้างต้องทำการยื่นประกันสังคมให้กับแรงงานทุกคน หลังจากแรงงานเริ่มทำงานให้กับนายจ้างแล้ว โดยต้องหักเงินส่งสมทบกองทุนประกันสังคม 5 % จากค่าแรง ของแรงงาน และนายจ้างจ่ายสมทบอีก 5 % เช่นกันทุกคน
                </div>
            </div>

               <!-- Question 3 -->
               <div class="py-4">
                <button class="w-full text-left flex justify-between items-center text-gray-700 font-medium focus:outline-none" onclick="toggleAccordion(this)">
                    <span>แรงงานที่ บนจ. ดิ อิมพอร์ตเตอร์ 168 นำเข้ามานั้น มีการรับประกันให้หรือไม่</span>
                    <svg class="w-5 h-5 text-gray-500 transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="pt-2 text-gray-600 text-sm hidden">
                    มี เรามีการรับประกันให้กับนายจ้าง คือ คืนค่าบริการ หรือชดเชยแรงงานให้ใหม่ ตามจำนวนแรงงานที่หลบหนีหรือส่งกลับ โดยการเพิ่มเติมจากชุดใหม่ หากนายจ้างประสงค์ต้องการแรงงานเพิ่มเติมอีก โดยไม่มีค่าบริการ(สำหรับการทดแทน) ทั้งนี้ แรงงานที่นำเข้ามานี้จะได้รับการการคัดเลือก และสัมภาษณ์ ชี้แจงให้ทราบลักษณะงานที่แรงงานต้องเข้ามาทำงานอยู่แล้ว ซึ่งการหลบหนีจะน้อย หากนายจ้างมีงาน มีโอทีให้ทำทุกวัน มีสวัสดิการที่ดีให้ตลอด ทั้งปี รับรองว่าแรงงานหลบหนี/สูญหายจะน้อยมาก
                </div>
            </div>

           


        </div>
    </div>
</section>



<script>
    function toggleAccordion(element) {
        const content = element.nextElementSibling;
        const icon = element.querySelector("svg");

        content.classList.toggle("hidden");
        icon.classList.toggle("rotate-180");
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    
const options = {
  colors: ["#1A56DB", "#FDBA8C"],
  series: [
    {
      name: "Organic",
      color: "#1A56DB",
      data: [
        { x: "นำเข้าแรงงาน", y: 2000 },
        { x: "ลูกค้าของเรา", y: 120 },
        { x: "บริการด้านเอกสาร", y: 2500 },
      ],
    },
   
  ],
  chart: {
    type: "bar",
    height: "320px",
    fontFamily: "Inter, sans-serif",
    toolbar: {
      show: false,
    },
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "70%",
      borderRadiusApplication: "end",
      borderRadius: 8,
    },
  },
  tooltip: {
    shared: true,
    intersect: false,
    style: {
      fontFamily: "Inter, sans-serif",
    },
  },
  states: {
    hover: {
      filter: {
        type: "darken",
        value: 1,
      },
    },
  },
  stroke: {
    show: true,
    width: 0,
    colors: ["transparent"],
  },
  grid: {
    show: false,
    strokeDashArray: 4,
    padding: {
      left: 2,
      right: 2,
      top: -14
    },
  },
  dataLabels: {
    enabled: false,
  },
  legend: {
    show: false,
  },
  xaxis: {
    floating: false,
    labels: {
      show: true,
      style: {
        fontFamily: "Inter, sans-serif",
        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
      }
    },
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
  },
  yaxis: {
    show: false,
  },
  fill: {
    opacity: 1,
  },
}

if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("column-chart"), options);
  chart.render();
}

</script>

{{-- <script >
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    var ctx = document.getElementById('serviceChart').getContext('2d');
    var gradient1 = ctx.createLinearGradient(0, 0, 0, 400);
    gradient1.addColorStop(0, '#4CAF50');
    gradient1.addColorStop(1, '#66BB6A');

    var gradient2 = ctx.createLinearGradient(0, 0, 0, 400);
    gradient2.addColorStop(0, '#2196F3');
    gradient2.addColorStop(1, '#42A5F5');

    var gradient3 = ctx.createLinearGradient(0, 0, 0, 400);
    gradient3.addColorStop(0, '#FFC107');
    gradient3.addColorStop(1, '#FFCA28');

    var serviceChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['นำเข้าแรงงาน', 'ลูกค้าของเรา', 'บริการด้านเอกสาร'],
            datasets: [{
                label: 'จำนวนสัญญาที่ทำสำเร็จ',
                data: [2000, 120, 2500],
                backgroundColor: [gradient1, gradient2, gradient3],
                borderColor: ['#4CAF50', '#2196F3', '#FFC107'],
                borderWidth: 1,
                hoverBackgroundColor: ['#4CAF50', '#2196F3', '#FFC107'],
                borderRadius: 10
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    borderWidth: 1,
                    borderColor: '#ddd'
                },
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    color: '#333',
                    font: {
                        weight: 'bold',
                        size: 14
                    },
                    formatter: function(value) {
                        return value + ' สัญญา';
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'สถิติทั้งการให้บริการ',
                        color: '#555',
                        font: {
                            size: 16,
                            weight: 'bold'
                        }
                    },
                    ticks: {
                        color: '#555'
                    },
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)',
                        borderDash: [5, 5]
                    }
                },
                x: {
                    ticks: {
                        color: '#555'
                    }
                }
            }
        }
    });
</script> --}}


  <br>
  <br>
  <br>
 

  
@endsection



