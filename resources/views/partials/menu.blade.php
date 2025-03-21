<style>
    /* ตั้งค่าเริ่มต้นสำหรับมือถือ */
    #text-menu {
        font-size: 9px;
    }
    #text-header {
        font-size: 14px;
    }

    #text-menu-p {
        font-size: 14px;
    }

    @media (min-width: 768px) {
        #text-menu {
            font-size: 17px;
        }
        #text-menu-p {
            font-size: 25px;
        }
    }

    
</style>



<nav class="bg-blue-900 border-blue-200 dark:bg-gray-900 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex  items-center space-x- text-white">
            <a href="tel:021012814" class="flex items-center space-x- text-white">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                </svg>
                <span id="text-header">0-2101-2814</span>
            </a>
            &nbsp;

            &nbsp;

            <a href="mailto:importer168@gmail.com" class="flex items-center space-x-1 text-white">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z" />
                    <path
                        d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z" />
                </svg>
                <span id="text-header">importer168@gmail.com</span>
            </a>
        </div>

        <div class="hidden w-full md:block md:w-auto " id="navbar-multi-level">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-blue-900 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="https://www.facebook.com/importer168" class="flex items-center text-white">
                        <span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://line.me/ti/p/nuBTEHY27p"
                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent"
                        aria-current="page">Line</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<nav class="bg-gray-50 border-gray-200 dark:bg-gray-900" style="z-index: 90000">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ url('logo/logo-2-min.png') }}" alt="Flowbite Logo" width="70px" />
            <span class="self-center text-xl text-header font-semibold whitespace-nowrap dark:text-white">
                <p id="text-menu">บริษัทนำคนต่างด้าวมาทำงานในประเทศ</p>
                <p id="text-menu-p" class="self-center text-1xl  font-semibold text-blue-900">ดิ อิมพอร์ตเตอร์ 168 จำกัด
                </p>
            </span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto " id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ url('home') }}"
                        class=" nav-link bnav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                        aria-current="page">
                        หน้าแรก</a>
                </li>
                <li>
                    <a href="{{ url('services') }}"
                        class=" nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        บริการของเรา</a>
                </li>
                <li>
                    <a href="{{url('about-us')}}"
                        class=" nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        เกี่ยวกับเรา</a>
                </li>
                <li>
                    <a href="{{route('ourclient.index')}}"
                        class=" nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        ลูกค้าของเรา</a>
                </li>
                <li>
                    <a href="{{url('articles')}}"
                        class="nav-link nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        ข่าวสาร</a>
                </li>
                <li>
                    <a href="{{url('faq')}}"
                        class=" nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        คำถามที่พบบ่อย</a>
                </li>
                <li>
                    <a href="{{ url('contact') }}"
                        class=" nav-link block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        ติดต่อเรา</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
    document.querySelectorAll('.nav-link').forEach(link => {
        // สร้าง URL ที่สมบูรณ์จาก href
        const linkHref = new URL(link.href, window.location.origin);
        const currentUrl = window.location.href;

        // เช็คว่า URL ตรงกันหรือไม่ โดยตรวจสอบจาก href ที่สมบูรณ์
        if (currentUrl === linkHref.href) {
            link.classList.add('md:text-blue-700');
        }
    });
</script>
