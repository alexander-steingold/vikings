<header id="top-header" class="sticky top-0 z-50 bg-black/10 transition duration-300">
    <div class="container">
        <div class="flex items-center justify-between py-5 lg:py-0">
            <a href="{{route('index')}}"><img src="assets/images/logo.png" alt="logo" class="h-12"/></a>
            <div class="flex items-center">
                <div onclick="toggleMenu()" class="overlay fixed inset-0 z-[51] hidden bg-black/60 lg:hidden"></div>
                <div class="menus">
                    <div class="border-b border-gray/10 ltr:text-right rtl:text-left lg:hidden">
                        <button onclick="toggleMenu()" type="button" class="p-4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6 text-black dark:text-white"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <ul>

                        <li>
                            <a href="{{route('index')}}">ראשי</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="smoothScrollToSection('about')">אודות</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="smoothScrollToSection('services')">שירותים</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="smoothScrollToSection('team')">הנהלה</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="smoothScrollToSection('facts')">עובדות</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="smoothScrollToSection('benefits')">יתרונות</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="smoothScrollToSection('contact')">צור קשר</a>
                        </li>
                        <li>
                            <a href="tel:{{ config('app.phone') }}" class="text-secondary">
                                {{ config('app.phone') }}
                            </a>
                        </li>
                        {{--                        <li--}}
                        {{--                            class="relative hidden items-center before:absolute before:top-1/2 before:h-[30px] before:w-[2px] before:-translate-y-1/2 before:bg-gray/30 ltr:pl-9 ltr:before:-left-[2px] rtl:pr-9 rtl:before:-right-[2px] lg:inline-flex"--}}
                        {{--                        >--}}
                        {{--                            <button type="button" onclick="search()" class="text-white hover:text-primary">--}}
                        {{--                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"--}}
                        {{--                                     xmlns="http://www.w3.org/2000/svg">--}}
                        {{--                                    <path--}}
                        {{--                                        d="M18.7363 17.4637L14.6512 13.3785C15.6799 12.0753 16.3 10.4347 16.3 8.65C16.3 4.4317 12.8683 1 8.65 1C4.4317 1 1 4.4317 1 8.65C1 12.8683 4.4317 16.3 8.65 16.3C10.4356 16.3 12.0754 15.6808 13.3786 14.6512L17.4637 18.7363C17.6392 18.9118 17.8696 19 18.1 19C18.3304 19 18.5608 18.9118 18.7363 18.7363C19.0882 18.3844 19.0882 17.8156 18.7363 17.4637ZM2.8 8.65C2.8 5.4244 5.4244 2.8 8.65 2.8C11.8756 2.8 14.5 5.4244 14.5 8.65C14.5 11.8756 11.8756 14.5 8.65 14.5C5.4244 14.5 2.8 11.8756 2.8 8.65Z"--}}
                        {{--                                        fill="currentColor"--}}
                        {{--                                    />--}}
                        {{--                                </svg>--}}
                        {{--                            </button>--}}
                        {{--                        </li>--}}
                        {{--                        <li--}}
                        {{--                            class="search-bar absolute hidden w-0 overflow-hidden bg-black transition-all duration-500 ltr:right-0 rtl:left-0 lg:block"--}}
                        {{--                        >--}}
                        {{--                            <form action="" class="relative">--}}
                        {{--                                <input--}}
                        {{--                                    type="text"--}}
                        {{--                                    placeholder="Search"--}}
                        {{--                                    class="w-full border-b border-white bg-transparent py-1 outline-none ltr:pl-2 ltr:pr-8 rtl:pr-2 rtl:pl-8"--}}
                        {{--                                />--}}
                        {{--                                <button--}}
                        {{--                                    type="button"--}}
                        {{--                                    class="absolute top-1/2 -translate-y-1/2 hover:text-primary ltr:right-0 rtl:left-0"--}}
                        {{--                                    onclick="search()"--}}
                        {{--                                >--}}
                        {{--                                    <svg--}}
                        {{--                                        xmlns="http://www.w3.org/2000/svg"--}}
                        {{--                                        fill="none"--}}
                        {{--                                        viewBox="0 0 24 24"--}}
                        {{--                                        stroke-width="1.5"--}}
                        {{--                                        stroke="currentColor"--}}
                        {{--                                        class="h-6 w-6"--}}
                        {{--                                    >--}}
                        {{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>--}}
                        {{--                                    </svg>--}}
                        {{--                                </button>--}}
                        {{--                            </form>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>
                {{--                <ul class="flex items-center gap-5 ltr:pr-5 rtl:pl-5 ltr:lg:pl-5 ltr:lg:pr-0 rtl:lg:pr-5 rtl:lg:pl-0">--}}
                {{--                    <li>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
                <button type="button"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-primary lg:hidden"
                        onclick="toggleMenu()">
                    <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="text-white">
                        <path
                            d="M2 15H11C11.552 15 12 15.447 12 16C12 16.553 11.552 17 11 17H2C1.448 17 1 16.553 1 16C1 15.447 1.448 15 2 15Z"
                            fill="currentColor"
                        />
                        <path
                            d="M2 8H20C20.552 8 21 8.447 21 9C21 9.553 20.552 10 20 10H2C1.448 10 1 9.553 1 9C1 8.447 1.448 8 2 8Z"
                            fill="currentColor"
                        />
                        <path
                            d="M21 2C21 1.447 20.552 1 20 1H7C6.448 1 6 1.447 6 2C6 2.553 6.448 3 7 3H20C20.552 3 21 2.553 21 2Z"
                            fill="currentColor"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
