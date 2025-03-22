@extends('layouts.app-labour')

@section('content')
    <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="./carousel/บริการนำเข้าmou.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-1 lg:mb-1">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">กระบวนการ
                    การนำเข้าแรงงาน 3 สัญชาติ</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">การนำเข้าแรงงานต่างด้าวภายใต้บันทึกข้อตกลงความร่วมมือ
                    (MOU) เพื่อให้แรงงานสามารถเข้ามาทำงานในประเทศไทยได้อย่างถูกกฎหมาย โดยมีขั้นตอนหลัก ๆ ดังนี้</p>
            </div>

            <img class="w-full dark:hidden" src="./import-mou/ขั้นตอนนำเข้า1.png" alt="dashboard image">


            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">ขั้นตอนที่ 1 - 5</h2>
            <ul class=" space-y-1 text-gray-500 list-none list-inside dark:text-gray-400">
                <li>

                </li>
                <li>
                    1.จัดทำเอกสารเกี่ยวกับขบวนการนำเข้าแรงงาน MOU
                </li>
                <li>
                    2.ควบคุมกระบวนการการนำเข้าและ ดำเนินการ เกี่ยวกับเอกสารให้ เป็นไปตามแผนการนำเข้าที่วางไว้
                </li>
                <li>
                    3.นำแรงงานส่งถึงที่ทำงาน ของนายจ้าง
                </li>
                <li>
                    4.แจ้งเข้าทำงาน แทนนายจ้าง มาตรา 13
                </li>
                <li>
                    5.แจ้งที่พัก ภายใน 24 ชั่วโมง มาตรา 38
                </li>
            </ul>


            <img class="w-full dark:hidden" src="./import-mou/ขั้นตอนนำเข้า02.png" alt="dashboard image">

            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">ขั้นตอนที่ 6 - 11</h2>
            <ul class=" space-y-1 text-gray-500 list-none list-inside dark:text-gray-400">
                <li>

                </li>
                <li>
                    6.ขอเลขประกันสังคม
                        และผู้เสียภาษี
                </li>
                <li>
                    7.ประสานงาน และดำเนินพา
                        แรงงานเปิดบัญชี
                </li>
                <li>
                    8.ตรวจเช็คฟรี
                        รายงานตัว 90 วัน
                </li>
                <li>
                    9.ต่อใบอนุญาต หลังครบ
                        2 ปีแรก
                </li>
                <li>
                    11.ทำรีเทิร์น หลังครบ
                        4 ปีแล้ว
                </li>
                <li>
                    11.แจ้งออก / หลบหนี / ส่งกลับ
                </li>
            </ul>


        </div>
    </section>


    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-1 lg:mb-1">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">เอกสารที่นายจ้างจะได้รับจากเรา</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">
                    เอกสารแรงงานต่างด้าวที่นายจ้างจะได้รับจากเรานั้น มีรายละเอียดและประเภทที่แตกต่างกันไป ขึ้นอยู่กับขั้นตอนการดำเนินการและประเภทของแรงงานต่างด้าว โดยทั่วไปแล้ว นายจ้างจะได้รับเอกสารสำคัญดังต่อไปนี้
                </p>
            </div>

            <img class="w-full dark:hidden" src="./import-mou/สิ่งที่นายจ้างจะได้รับ-impoter168.png" alt="dashboard image">

        </div>
    </section>
    <br>
    <br>

@endsection
