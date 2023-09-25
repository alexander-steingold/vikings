<div
    id="carouselExampleCaptions"
    class="relative"
    data-te-carousel-init
    data-te-ride="carousel">

    <!--Carousel items-->
    <div
        class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
        <!--First item-->
        <div
            class="relative float-left -mr-[100%] w-full transition-transform duration-[300ms] ease-in-out motion-reduce:transition-none"
            data-te-carousel-active
            data-te-carousel-item
            style="backface-visibility: hidden">
            <img
                src="{{ asset('assets/images/vikings/v1.jpg')}}"
                class="block w-full h-75 opacity-50"
                alt="..."/>
            <x-landing.intro/>
        </div>
        <!--Second item-->
        <div
            class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[300ms] ease-in-out motion-reduce:transition-none"
            data-te-carousel-item
            style="backface-visibility: hidden">
            <img
                src="{{ asset('assets/images/vikings/v2.jpg')}}"
                class="block w-full h-75 opacity-50"
                alt="..."/>
            <x-landing.intro/>
        </div>
        <!--Third item-->
        <div
            class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[300ms] ease-in-out motion-reduce:transition-none"
            data-te-carousel-item
            style="backface-visibility: hidden">
            <img
                src="{{ asset('assets/images/vikings/v3.jpg')}}"
                class="block w-full h-75 opacity-50"
                alt="..."/>
            <x-landing.intro/>
        </div>
    </div>

</div>
{{--<section--}}
{{--    class=" bg-cover  bg-center bg-no-repeat pt-[82px] text-white lg:pt-[106px]"--}}
{{--    style="background-image: url('../assets/images/vikings/v1.jpg') !important;"--}}
{{-->--}}
{{--    <div class="container">--}}
{{--        <div class="flex flex-col gap-7 pt-6 md:flex-row md:gap-0">--}}
{{--            <div class="space-y-5 pt-24 pb-10 text-center ltr:md:text-left rtl:md:text-right">--}}
{{--                <h5 class="text-xl font-bold">We are professionals for</h5>--}}
{{--                <h2 class="text-4xl font-black uppercase sm:text-6xl sm:leading-tight">--}}
{{--                    Grow Your <span class="text-secondary">Business!</span>--}}
{{--                </h2>--}}
{{--                <p class="text-lg font-semibold">--}}
{{--                    It is a long established fact that a reader will be distracted by the readable content of a page--}}
{{--                    when looking at its layout.--}}
{{--                </p>--}}
{{--                <div class="flex items-center justify-center gap-5 md:justify-start">--}}
{{--                    <div--}}
{{--                        class="flex h-[60px] w-[60px] items-center justify-center rounded-full bg-primary/50 duration-200 hover:bg-black">--}}
{{--                        <img src="assets/images/consulting/banner-icon1.svg" alt=""/>--}}
{{--                    </div>--}}
{{--                    <div--}}
{{--                        class="flex h-[60px] w-[60px] items-center justify-center rounded-full bg-primary/50 duration-200 hover:bg-black">--}}
{{--                        <img src="assets/images/consulting/banner-icon2.svg" alt=""/>--}}
{{--                    </div>--}}
{{--                    <a class="flex h-[60px] w-[60px] items-center justify-center rounded-full bg-primary/50 duration-200 hover:bg-black">--}}
{{--                        <img src="assets/images/consulting/banner-icon3.svg" alt=""/>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <a href="contact-us.html" class="btn rounded-md bg-white">Contact us</a>--}}
{{--            </div>--}}
{{--            <div class="mx-auto w-full max-w-[435px]">--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
