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
                        {{--                        <li>--}}
                        {{--                            <a href="javascript:void(0)" onclick="smoothScrollToSection('team')">הנהלה</a>--}}
                        {{--                        </li>--}}
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
