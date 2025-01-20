@extends('layouts.app-labour')

@section('content')
<div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
            <img src="./about/importer-about-0.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
</div>


<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-900 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-900 dark:text-white">เกี่ยวกับเรา</h2>
            <p class="mb-2">เราพร้อมแล้ว กับการบริการงานด้านแรงงานต่างด้าวให้กับทุกๆนายจ้าง ทุกๆ ประเภทอุตสาหกรรม ด้วยทีมงาน ระบบการทำงาน แผนการทำงาน</p>
            <p>ตามพระราชกำหนดการนำเข้าคนต่างด้าวพ.ศ. 2560 สามารถนำเข้าแรงงานต่างด้าวและดำเนินการเอกสาร ทุกรูปแบบเกี่ยวกับแรงงานต่างด้าวได้อย่างถูกต้องตามกฎหมายได้
                ทั้งนี้ บริษัทฯ ได้วางหลักประกัน กับกรม การจัดหางานเป็นจำนวนเงิน ห้าล้านบาท เป็นที่เรียบร้อย เพื่อเป็นหลักประกันและสร้างความมั่นใจกับทางนายจ้างในการใช้บริการจากเรา</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-4 ml-4">
            <img class="w-full rounded-lg" src="./about/importer-about-1.webp" alt="office content 1" style="width: 750px">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="./about/importer-about-2.webp" alt="office content 2">
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <h2 class="mb-2 text-4xl tracking-tight font-extrabold text-blue-900 dark:text-white">ค่านิยมองค์กรของเรา</h2>
        <div class="grid pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2">
            <div>
                <div class="mt-0">
                    <h3 class="flex items-center text-lg font-medium text-gray-900 dark:text-white">
                        <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        ลูกค้าคือคนสำคัญอันดับแรก 
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">เราพร้อมที่จะตอบสนองความต้องการของลูกค้าให้ดีที่สุดเท่าที่เราจะพึงกระทำได้ก่อน  ด้วยนโยบาย ความผิดพลาด เป็น ศูนย์</p>
                </div>
                <div class="mt-2">
                    <h3 class="flex items-center text-lg font-medium text-gray-900 dark:text-white">
                        <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        ร่วมใจ ร่วมคิด ร่วมทำ ร่วมใจกันทำงานเป็นทีม 
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">โดยมุ่งบรรลุเป้าหมายเพื่อประโยชน์ร่วมกัน ทั้งของลูกค้า แรงงานต่างด้าว และบริษัทของเรา</p>
                </div>

               
    
            </div>
            <div>
                <div class="mt-0">
                    <h3 class="flex items-center text-lg font-medium text-gray-900 dark:text-white">
                        <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        การทำงานของเราต้องซื่อสัตย์ 
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">ยึดถือความเป็นมืออาชีพคำนึงถึงมาตรฐาน จนสามารถสร้างความเชื่อมั่นให้แก่ลูกค้าได้</p>
                </div>
                <div class="mt-2">
                    <h3 class="flex items-center text-lg font-medium text-gray-900 dark:text-white">
                        <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        เตรียมพร้อมกับการเปลี่ยนแปลง 
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">และการพัฒนาอย่างต่อเนื่อง เพื่อประโยชน์ของลูกค้า และทันต่อสถานการณ์ของแรงงานต่างด้าวที่ปรับเปลี่ยนตลอด</p>
                </div>
        </div>
    </div>

    
    </div>

    
  </section>

  <section class="bg-white dark:bg-gray-900">
    <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full dark:hidden" src="./about/จิรวัฒน์-ศิริกาญน์วรกุล.webp" alt="dashboard image" >
        {{-- <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image"> --}}
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">พันธกิจ : Mission</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
             มุ่งสู่การเป็นบริษัทนำเข้าแรงงานต่างด้าวที่มีคุณภาพ มีมาตรฐานในการทำงานและได้รับความไว้วางใจอย่างต่อเนื่อง ด้วยการทำงานที่ ตรงต่อเวลา ซื่อสัตย์ สามารถตอบสนองต่อความต้องการของนายจ้าง และทำให้แรงงานต่างด้าวของนายจ้างทุกคนเป็นแรงงานที่ถูกกฎหมาย มุ่งมั่นให้ทั้งสามฝ่ายประสบความสำเร็จร่วมกัน โดยใช้หลัก คิดที่ว่า "คุณภาพและคุณธรรม "
             “คุณภาพ” คือ เป็นแรงงานที่ดี ร่างกายแข็งแรง ขยัน ตั้งใจมาทำงาน ปัญหาน้อย ทำให้นายจ้างสบายใจ ไว้วางใจในการทำงานร่วมกัน
             “คุณธรรม” คือ ประสบผลดีกับทุกฝ่าย งานที่ทำดี นายจ้างพึงพอใจ แรงงานมีรายรับที่ดี นำไปสู่กุญแจแห่งความสำเร็จร่วมกัน
            </p>
        </div>
    </div>
</section>

{{-- <section class="bg-white dark:bg-gray-900">
    <div class="gap-6 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        
    </div>
</section> --}}



  <br>
  <br>
  <br>

@endsection