<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'บริษัทนำเข้าแรงงานต่างด้าว ดิ อิมพอร์ตเตอร์ 168 จำกัด')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-white text-gray-900">
               
    @include('partials.header')
    @include('partials.menu')

    {{-- <div class="container mx-auto mt-4"> --}}
        <div class="">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
