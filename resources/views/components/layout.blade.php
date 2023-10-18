<!DOCTYPE html>
<html lang="en" style="direction: rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $title }}</title>
    <!-- Favicon -->
    <link rel="icon" type="icon" href="assets/images/logo.png"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;700&display=swap" rel="stylesheet">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"/>
    <!-- AOS Animation CSS -->
    <link href="assets/css/aos.css" rel="stylesheet"/>
    <!-- Style CSS -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body class="overflow-x-hidden dark dark">
<x-partials.loader/>
<div
    class="flex min-h-screen flex-col  font-mulish text-base font-normal text-gray antialiased bg-[#101926] from-transparent to-transparent"
>
    <x-partials.header/>
    <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
        {{ $slot }}
    </div>
    <x-partials.footer/>
</div>

<x-partials.totop/>

<!-- Swiper Slider JS -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- Counter Js -->
<script src="assets/js/vanilla-counter.js"></script>
<!-- AOS Animation JS -->
<script src="assets/js/aos.js"></script>
<!-- Custom Js -->
<script src="assets/js/custom.js"></script>
</body>
</html>

