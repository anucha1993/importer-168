@extends('layouts.app-labour')

@section('content')
    <div id="animation-carousel" class="relative w-full mx-auto max-w-screen-xl" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="duration-200 ease-linear" data-carousel-item style="display: block;">
                <img src="./carousel/ธัญพิมล.webp"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
    </div>

    <section class="bg-white dark:bg-gray-900 mb-[-80px]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-900 dark:text-white">ติดต่อเรา</h2>
                <hr>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400 mt-5">
                    เรายินดีบริการทุกท่านด้วยความเชี่ยวชาญ มืออาชีพ เชื่อถือได้ทุกกระบวนการ ถูกกฎหมาย รวดเร็ว ฉับไว
                    และซื่อตรงต่อการบริการ "ซื่อสัตย์ พัฒนา รักษาคำมั่น สรรค์สร้างบริการเป็นเลิศ คือคีย์เวิร์ด ของ TIP168
                </p>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 p-4">
                    <div class="mb-4 p-4 border rounded-lg">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" style="width: 800px"
                            src="./images/contact/office-impoter168.jpg" alt="Bonnie Avatar">
                    </div>

                    <div class="p-4 border rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-semibold">สำนักงานใหญ่</h3>
                            <?php
                            
                            // กำหนดช่วงเวลาทำการ
                            $open_time = '08:30';
                            $close_time = '17:30';
                            
                            // กำหนดวันทำการ (จันทร์ถึงเสาร์)
                            $working_days = [1, 2, 3, 4, 5, 6]; // 1 = จันทร์, 6 = เสาร์
                            
                            // รับวันและเวลาปัจจุบัน
                            $current_time = date('H:i');
                            $current_day = date('N'); // 1 (จันทร์) ถึง 7 (อาทิตย์)
                          
                            
                            // ตรวจสอบว่าวันนี้เป็นวันทำการหรือไม่
                            if (in_array($current_day, $working_days)) {
                                // ตรวจสอบว่าเวลาปัจจุบันอยู่ในช่วงเวลาทำการหรือไม่
                                if ($current_time >= $open_time && $current_time <= $close_time) {
                                    echo "<p class='text-sm text-green-500'>เปิดทำการ</p>";
                                } else {
                                    echo "<p class='text-sm text-red-500'>ปิดทำการ</p>";
                                }
                            } else {
                                echo "<p class='text-sm text-red-500'>ปิดทำการ</p>";
                            }
                            
                            ?>

                        
                        </div>
                        <p class="text-sm">บริษัทนำคนต่างด้าวมาทำงานในประเทศ ดิ อิมพอร์ตเตอร์ 168 จำกัด</p>
                        <p class="text-sm">เลขที่ 62/231-232 ซอย ประเสริฐมนูกิจ 7 ถนน ประเสริฐมนูกิจ 27 </p>
                        <p class="text-sm">แขวงจรเข้บัว เขตลาดพร้าว กรุงเทพมหานคร 10230</p>

                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-semibold">เวลาทำการ</h3>
                        </div>
                        <p class="text-sm">วันจันทร์ ถึง วันเสาร์ เวลา 8:30น. ถึง 17:30 น.</p>
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-semibold">ช่องทางการติดต่อ</h3>
                        </div>
                        <p class="text-sm">Facebook : <a href="https://www.facebook.com/importer168"
                                class="text-blue-500 text-sm mr-2">importer168</a> </p>
                        <p class="text-sm">Line : <a href="https://line.me/ti/p/nuBTEHY27p"
                                class="text-blue-500 text-sm mr-2">theimporter168</a></p>
                        <p class="text-sm">Email : <a href="mailto:importer168@gmail.com"
                                class="text-blue-500 text-sm mr-2">importer168@gmail.com</a></p>
                        <p class="text-sm">Tel : <a href="tel:021012814" class="text-blue-500 text-sm mr-2">0-2101-2814</a>
                        </p>



                        {{-- <div class="mt-2">
                  <a href="#" class="text-blue-500 text-sm mr-2">View Store</a>
                  <a href="#" class="text-blue-500 text-sm">Start a Repair</a>
                </div> --}}
                    </div>
                </div>

                <div class="w-full md:w-1/2 p-4">
                    <div class="relative">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7747.045565123394!2d100.606993!3d13.840663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29dbafb1b760d%3A0x4698ea6072304004!2z4Lia4Lij4Li04Lip4Lix4LiX4LiZ4Liz4LiE4LiZ4LiV4LmI4Liy4LiH4LiU4LmJ4Liy4Lin4Lih4Liy4LiX4Liz4LiH4Liy4LiZ4LmD4LiZ4Lib4Lij4Liw4LmA4LiX4LioIOC4lOC4tCDguK3guLTguKHguJ7guK3guKPguYzguJXguYDguJXguK3guKPguYwgMTY4IOC4iOC4s-C4geC4seC4lA!5e0!3m2!1sth!2sth!4v1730268452960!5m2!1sth!2sth"
                            width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <div
                            class="absolute top-1/4 left-1/4 transform -translate-x-1/2 -translate-y-1/2 bg-white p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold">Kenwood</h3>
                            <p class="text-sm">7338 Kenwood Road</p>
                            <p class="text-sm">Cincinnati, OH 45236</p>
                            <p class="text-sm">(513) 334-0421</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    {{-- <section class="bg-white dark:bg-gray-900 mb-[-80px]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-900 dark:text-white">ติดต่อเรา</h2>
                <hr>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400 mt-5">
                    เรายินดีบริการทุกท่านด้วยความเชี่ยวชาญ มืออาชีพ เชื่อถือได้ทุกกระบวนการ ถูกกฎหมาย รวดเร็ว ฉับไว
                    และซื่อตรงต่อการบริการ "ซื่อสัตย์ พัฒนา รักษาคำมั่น สรรค์สร้างบริการเป็นเลิศ คือคีย์เวิร์ด ของ TIP168
                </p>
            </div>
            <div class="grid gap-9 mb-6 lg:mb-16 md:grid-cols-2">
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" style="width: 800px"
                            src="./images/contact/office-impoter168.jpg" alt="Bonnie Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-blue-900 dark:text-white">
                            <a href="#">สำนักงานใหญ่</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">บริษัทนำคนต่างด้าวมาทำงานในประเทศ <br> ดิ
                            อิมพอร์ตเตอร์ 168 จำกัด</span>
                        <hr>
                        <p class="mt-1 mb-4 font-light text-gray-500 dark:text-gray-400">เลขที่ 62/231-232 ซอย
                            ประเสริฐมนูกิจ 27 ถนน ประเสริฐมนูกิจ แขวงจรเข้บัว เขตลาดพร้าว กรุงเทพมหานคร 10230</p>

                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7747.045565123394!2d100.606993!3d13.840663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29dbafb1b760d%3A0x4698ea6072304004!2z4Lia4Lij4Li04Lip4Lix4LiX4LiZ4Liz4LiE4LiZ4LiV4LmI4Liy4LiH4LiU4LmJ4Liy4Lin4Lih4Liy4LiX4Liz4LiH4Liy4LiZ4LmD4LiZ4Lib4Lij4Liw4LmA4LiX4LioIOC4lOC4tCDguK3guLTguKHguJ7guK3guKPguYzguJXguYDguJXguK3guKPguYwgMTY4IOC4iOC4s-C4geC4seC4lA!5e0!3m2!1sth!2sth!4v1730268452960!5m2!1sth!2sth"
                            width="300" height="230" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-blue-900 dark:text-white">
                            <a href="#">เวลาทำการ</a>
                        </h3>
                        <span class="text-blue-500 dark:text-gray-400">วันจันทร์ ถึง วันเสาร์ <br> เวลา 8:30น. ถึง 17:30
                            น.</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
                            Facebook : <a href="https://www.facebook.com/importer168">importer168</a> <br>
                            Line : <a href="https://n9.cl/theimporter168">theimporter168</a> <br>
                            Email : importer168@gmail.com <br>
                            Tel : 0-2101-2814 <br>
                        </p>

                    </div>
                </div>

    </section> --}}

    <section class="bg-gray-100 dark:bg-gray-900 mb-[-60px]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-900 dark:text-white">ทีมงานของเรา</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                TIP168 พร้อมวิสัยทัศน์และประสบการณ์ที่ยาวนานในวงการนี้ ช่วยชี้นำให้ทีมทำงานไปในทิศทางที่ถูกต้อง
                และเน้นการสร้างคุณค่าให้กับลูกค้าเป็นสำคัญ
            </p>
        </div>
    </section>


    <section class="bg-gray-100  dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            {{-- <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                       <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-900 dark:text-white">ทีมงานของเรา</h2>
                       <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
                   </div>  --}}
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="./images/contact/impoter-จิรวัฒน์.svg"
                        alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">จิรวัฒน์ (เจมส์)</a>
                    </h3>
                    <p>"ความตั้งใจอย่างเต็มที่ เต็มกำลังและความสามารถ ผลสำเร็จจะนำทางให้สู่ทางที่ฝันตามที่ตั้งใจ"</p>

                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="./images/contact/importer-สุจิตา.svg"
                        alt="Helene Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">สุจิตา (ตุ๊กตา)</a>
                    </h3>
                    <p>"ตั้งใจทำงานทุกอย่างให้เต็มที่ เพื่อความพึงพอใจของลูกค้า การบริการให้กับลูกค้ามาเป็นอันดับหนึ่ง "</p>
                    <p> <a href="tel:0633947549" class="text-blue-900"><b>โทร : 06-3394-7549</b></a></p>

                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="./images/contact/importer-อังคณา.svg"
                        alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">อังคณา (ตุ๊กกี้)</a>
                    </h3>
                    <p> ความตั้งใจ และความพยายาม เพื่อทำหน้าที่ให้ดีที่สุด"</p>
                    <p> <a href="tel:0626650249" class="text-blue-900"><b>โทร : 06-2665-0249</b></a></p>

                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="./images/contact/impoter-พัชรีพร.svg"
                        alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">พัชรีพร (พอน)</a>
                    </h3>
                    <p>"กล้าที่จะผ่าฟัน มุ่งมั่นที่จะพัฒนา ถ้าใจเราไม่ยอม ความจริงนั้นก็ไม่ไกล"</p>
                    <p> <a href="tel:0626672349" class="text-blue-900"><b>โทร : 06-2667-2349</b></a></p>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="./images/contact/impoter-อ้อน.jpg"
                        alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">ณัฐสุดา (อ้อน)</a>
                    </h3>
                    <p>"สู้ทุกปัญา เพื่อวันข้างหน้า"</p>
                    <p> <a href="tel:0620749149" class="text-blue-900"><b>โทร : 06-2074-9149</b></a></p>


                </div>

                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="./images/contact/impoter-อรพิม.jpg"
                        alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">อรพิม (พิม)</a>
                    </h3>
                    <p>"ถ้าเราตั้งใจ ยังไงก็สำเร็จ"</p>
                    <p> <a href="tel:0661683491" class="text-blue-900"><b>โทร : 06-2665-0249</b></a></p>

                </div>
                {{-- <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="./images/contact/importer-รสินทรา.svg"
                        alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">รสินทรา(น้ำ)</a>
                    </h3>
                    <p>"สู้ทุกปัญา เพื่อวันข้างหน้า"</p>

                </div> --}}
                {{-- <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="./images/contact/importer-ณัฐนันท์.svg"
                        alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">ณัฐนันท์ (ตาล)</a>
                    </h3>
                    <p>"ตัวอย่างที่ดี...มีค่ากว่าคำสอน"</p>

                </div> --}}
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="./images/contact/importer-ธัญพิมล.svg"
                        alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">ธัญพิมล (พิม)</a>
                    </h3>
                    <p>"งานบางอย่างอาจจะยาก แต่คำว่ายากไม่ได้หมายความว่าเป็นไปไม่ได้"</p>

                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
@endsection
