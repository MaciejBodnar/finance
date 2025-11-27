<header class="w-full relative">

    <div class="bg-[#2d7e3b] text-white">
        <div class="max-w-6xl mx-auto flex items-center justify-center md:justify-between py-3 px-4 lg:px-0 text-sm">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/logo-desktop.png" alt="Optimum Tax"
                    class="w-10 h-12 object-contain" />
                <span class="text-lg font-semibold tracking-wide">
                    Optimum Tax
                </span>
            </a>

            <div class="flex items-center gap-8">

                <div class="hidden md:flex items-center gap-2">
                    <span class="opacity-80">Zadzwoń do nas:</span>
                    +0208 840 0422
                </div>

                <div class="items-center gap-6 text-xs hidden md:flex">
                    <button class="flex items-center gap-2 hover:cursor-pointer">
                        <img src="https://kapowaz.github.io/circle-flags/flags/pl.svg" width="22" />
                        <span class="font-semibold">PL</span>
                    </button>

                    <button class="flex items-center gap-2 hover:cursor-pointer">
                        <img src="https://kapowaz.github.io/circle-flags/flags/gb.svg" width="22" />
                        <span class="font-semibold">EN</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <nav class="bg-[#122457] text-white">
        <div class="max-w-6xl mx-auto px-4 lg:px-0 py-6">
            <div class="flex items-center justify-center md:justify-between">

                <ul class="hidden md:flex items-center gap-8 text-sm">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#ffba6a] transition">
                            Strona Główna
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="hover:text-[#ffba6a] transition">
                            O nas
                        </a>
                    </li>
                    <li class="relative">
                        <button id="ksiegowosc-link" type="button" aria-expanded="false"
                            class="hover:text-[#ffba6a] transition inline-flex items-center text-sm">
                            Księgowość
                            <span class="ml-1 text-[10px]">▾</span>
                        </button>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/partners/')); ?>" class="hover:text-[#ffba6a] transition">
                            Partnerzy
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="hover:text-[#ffba6a] transition">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="hover:text-[#ffba6a] transition">
                            Kontakt
                        </a>
                    </li>
                </ul>

                <button id="mobile-menu-toggle"
                    class="lg:hidden flex flex-col justify-center items-center w-8 h-8 space-y-1">
                    <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
                    <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
                    <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile full-screen overlay menu (hidden on md and up) -->
    <div id="mobile-menu" class="md:hidden hidden fixed inset-0 z-50 bg-[#0b285f] text-white overflow-auto">
        <div class="relative min-h-full">
            <div class="max-w-3xl mx-auto px-6 py-10">
                <div class="flex items-center justify-between mb-8">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/logo-desktop.png" alt="Optimum Tax"
                            class="w-10 h-12 object-contain" />
                        <span class="text-lg font-semibold tracking-wide">Optimum Tax</span>
                    </a>

                    <button id="mobile-menu-close" aria-label="Zamknij menu" class="p-2 rounded border border-white/20">
                        <span class="sr-only">Zamknij</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mobile-nav-wrapper">
                    @include('partials.mobile-nav')
                </div>
            </div>
        </div>
    </div>

    <div id="ksiegowosc-panel" class="hidden absolute left-0 right-0 top-full z-50">
        <div class="bg-white text-[#0b285f] shadow-lg">
            <div class="max-w-6xl mx-auto px-4 lg:px-0 py-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h4 class="font-semibold mb-3">Usługi podstawowe</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="<?php echo esc_url(home_url('/firmy-ltd/')); ?>" class="hover:underline">Firmy LTD</a></li>
                            <li><a href="<?php echo esc_url(home_url('/wlasna-dzialalnosc/')); ?>" class="hover:underline">Własna działalność</a></li>
                            <li><a href="<?php echo esc_url(home_url('/spolki-cywilne/')); ?>" class="hover:underline">Spółki cywilne</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-3">Rozszerzenia</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="<?php echo esc_url(home_url('/dodatkowe-uslugi/')); ?>" class="hover:underline">Dodatkowe usługi</a></li>
                            <li><a href="<?php echo esc_url(home_url('/wirtualne-biuro/')); ?>" class="hover:underline">Wirtualne biuro</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-3">Kontakt i pomoc</h4>
                        <p class="text-sm">Masz pytania? <a href="tel:+02088400422" class="font-semibold">Zadzwoń do
                                nas</a> lub
                            <a href="#kontakt" class="font-semibold">napisz</a> — chętnie doradzimy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
