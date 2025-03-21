@extends('layouts.app-labour')

@section('content')
    <br>
    {{-- <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl " data-carousel="static">
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
    </div> --}}
    <br>

    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12 ">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">

            <div class="flex justify-between items-start p-4 border-b border-gray-300 dark:border-gray-700">
                <h2 class="text-md font-semibold text-gray-900 dark:text-white">{!! $service->name !!}</h2>
            </div>
            <div class="flex justify-left mb-4 mt-4">
                <img src="{{ url($service->image_path) }}" alt="ประกอบการให้บริการแรงงานต่างด้าว"
                    class="w-85 h-auto rounded-lg shadow-md">
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mx-5 ">

                <!-- คอลัมน์ซ้าย: รูปภาพประกอบและรายละเอียด -->
                <div class="space-y-4">
                    <!-- รูปภาพ -->


                    <!-- ข้อมูลรายละเอียด -->
                    <div>

                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">

                            {!! htmlspecialchars_decode($service->details) !!}
                       

                        {{-- 
                        <div>
                            <h2 class="text-xl font-semibold text-blue-800 mb-1">ทำไมต้องเลือกใช้บริการนี้?</h4>
                                <ul class="text-md list-disc pl-5 text-gray-700 dark:text-gray-400 space-y-1">
                                    <li>ช่วยแก้ปัญหาขาดแคลนแรงงานในสาขาที่ต้องการ</li>
                                    <li>ลดต้นทุนการผลิตให้กับผู้ประกอบการ</li>
                                    <li>เพิ่มประสิทธิภาพการทำงานจากแรงงานที่มีความเชี่ยวชาญ</li>
                                </ul>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-blue-800 mb-1">กระบวนการและขั้นตอนที่สำคัญ?</h4>
                                <ul class="text-md list-disc pl-5 text-gray-700 dark:text-gray-400 space-y-1">
                                    <li>ยื่นขออนุญาตจากกรมการจัดหางาน</li>
                                    <li>คัดเลือกแรงงานจากประเทศต้นทาง</li>
                                    <li>ตรวจสุขภาพแรงงาน</li>
                                    <li>ขอวีซ่าทำงานจากสถานทูตไทย</li>
                                    <li>ดำเนินการเดินทางเข้าประเทศ</li>

                                </ul>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-blue-800 mb-1">บริการจากบริษัทนำเข้าแรงงาน</h4>
                                <ul class="text-md list-disc pl-5 text-gray-700 dark:text-gray-400 space-y-1">
                                    <li>การประสานงานกับหน่วยงานราชการ</li>
                                    <li>การคัดเลือกแรงงานที่ตรงตามคุณสมบัติ</li>
                                    <li>การจัดการเอกสารทั้งหมดที่เกี่ยวข้อง</li>
                                    <li>การให้คำปรึกษาเกี่ยวกับกฎหมายแรงงาน</li>
                                </ul>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-blue-800 mb-1">ข้อควรระวังในการเลือกใช้บริการ</h4>
                                <ul class="text-md list-disc pl-5 text-gray-700 dark:text-gray-400 space-y-1">
                                    <li>เลือกบริษัทที่มีใบอนุญาตและความน่าเชื่อถือ</li>
                                    <li>ตรวจสอบสัญญาและเงื่อนไขอย่างละเอียด</li>
                                    <li>ปฏิบัติตามกฎหมายแรงงานต่างด้าวอย่างเคร่งครัด</li>
                                </ul>
                        </div>

                        <div>
                            <h2 class="text-xl font-semibold text-blue-800 mb-1">หมายเหตุสำคัญ</h4>
                                <p class="text-gray-700 leading-relaxed mb-2">
                                    กฎหมายเกี่ยวกับการนำเข้าแรงงานต่างด้าวมีการปรับเปลี่ยนเสมอ
                                    ควรติดตามข้อมูลล่าสุดและปรึกษาผู้เชี่ยวชาญ
                                </p>
                                <ul class="text-md list-disc pl-5 text-gray-700 dark:text-gray-400 space-y-1">
                                    <li>พระราชกำหนดการบริหารจัดการการทำงานคนต่างด้าว พ.ศ. ๒๕๖๐ และที่แก้ไขเพิ่มเติม</li>
                                    <li>พระราชบัญญัติตรวจคนเข้าเมือง</li>
                                    <li>พระราชบัญญัติการทำงานและคุ้มครองแรงงาน</li>
                                </ul>
                        </div> --}}




                        </p>


                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <h2 class="text-xl font-semibold text-blue-800 mb-1">ระยะเวลาดำเนินการ:</h4>
                                <ul class="text-md  list-disc pl-5 text-gray-600 dark:text-gray-400 space-y-1">
                                    {!! htmlspecialchars_decode($service->period) !!}
                                </ul>
                            </div>
                            <div>
                                <h2 class="text-xl font-semibold text-blue-800 mb-1">สัญชาติ:</h4>
                                <p class="text-md  text-gray-600 dark:text-gray-400">
                                    {!! htmlspecialchars_decode($service->nationality) !!}
                                </p>
                            </div>
                        </div>

                        <!-- ปุ่มกรอกข้อมูลเบื้องต้น -->
                        <div class="pt-4">
                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-full text-sm px-5 py-2.5">กรอกข้อมูลเบื้องต้น</button>
                        </div>

                        <!-- ข้อมูลเพิ่มเติม -->

                    </div>
                </div>

                <!-- คอลัมน์ขวา: ขั้นตอนการดำเนินการและเอกสาร -->
                <div>
                    {!! htmlspecialchars_decode($service->content) !!}
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <section class="bg-gray-50 py-8 antialiased bg-white dark:bg-gray-900 md:py-12 ">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <!-- Heading & Filters -->
                <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                    <div>

                        <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">เลือกบริการของเรา
                        </h2>
                    </div>


                </div>

                <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4 xl:grid-cols-3">
                    @foreach ($services as $service)
                        <div
                            class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">

                            <div class="flex justify-center mx-4 items-center">
                                <img src="{{ url($service->image_path) }}" alt="ประกอบการให้บริการแรงงานต่างด้าว"
                                    class="rounded-lg shadow-md" style="width: 1800px">
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
                                    <a href="{{ url('services/' . $service->id . '/view') }}">{!! $service->name !!}</a>
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
                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                            {!! $service->nationality !!}</p>
                                    </li>
                                </ul>
                                <div class="mt-4 flex items-center justify-between gap-4">
                                    <div class="flex items-center mb-2">
                                        @php
                                            $flags = json_decode($service->flag, true); // แปลง JSON เป็น array
                                        @endphp

                                        @if (is_array($flags))
                                            @foreach ($flags as $flag)
                                                <img src="{{ url($flag) }}" alt="นำเข้าแรงงานพม่าmou"
                                                    class="w-8 h-6 mx-1">
                                            @endforeach
                                        @else
                                            <p>ไม่มีรูปภาพ</p>
                                        @endif


                                    </div>
                                    <a href="javascript:void(0);" data-id="{{ $service->id }}"
                                        data-modal-target="import-modal" data-modal-toggle="import-modal"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 modal-trigger">
                                        ดูรายละเอียด
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endforeach


        </section>
    @endsection
