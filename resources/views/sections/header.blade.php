<header class="w-full">

    <div class="bg-[#2d7e3b] text-white">
        <div class="max-w-6xl mx-auto flex items-center justify-between py-3 px-4 lg:px-0 text-sm">

            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
                <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mark.svg" alt="Optimum Tax"
                        class="w-7 h-7 object-contain" />
                </div>
                <span class="text-lg font-semibold tracking-wide">
                    Optimum <span class="font-normal">Tax</span>
                </span>
            </a>

            <div class="flex items-center gap-8">

                <div class="hidden md:flex items-center gap-2">
                    <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-white/10">
                        <span class="text-xs">📞</span>
                    </span>
                    <span class="opacity-80">Zadzwoń do nas:</span>
                    <a href="tel:+442088400422" class="font-semibold hover:underline whitespace-nowrap">
                        +0208 840 0422
                    </a>
                </div>

                <div class="flex items-center gap-3 text-xs">
                    <button class="flex items-center gap-2">
                        <span
                            class="w-4 h-4 rounded-full bg-linear-to-b from-white to-red-600 border border-white"></span>
                        <span class="font-semibold">PL</span>
                    </button>

                    <span class="text-white/40 text-lg leading-none">✢</span>

                    <button class="flex items-center gap-1 text-white/60 hover:text-white transition">
                        <span class="font-semibold">EN</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <nav class="bg-[#122457] text-white">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">
            <div class="flex items-center justify-between h-12">

                <ul class="hidden md:flex items-center gap-8 text-sm">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>"
                            class="pb-1 border-b-2 border-[#ffba6a] text-[#ffba6a] font-semibold">
                            Strona Główna
                        </a>
                    </li>
                    <li>
                        <a href="#onas" class="hover:text-[#ffba6a] transition">
                            O nas
                        </a>
                    </li>
                    <li class="relative">
                        <a href="#ksiegowosc" class="hover:text-[#ffba6a] transition inline-flex items-center">
                            Księgowość
                            <span class="ml-1 text-[10px]">▾</span>
                        </a>
                    </li>
                    <li>
                        <a href="#partnerzy" class="hover:text-[#ffba6a] transition">
                            Partnerzy
                        </a>
                    </li>
                    <li>
                        <a href="#blog" class="hover:text-[#ffba6a] transition">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#kontakt" class="text-[#ffba6a] hover:text-[#ffd6a0] transition">
                            Kontakt
                        </a>
                    </li>
                </ul>

                <button
                    class="md:hidden inline-flex items-center justify-center w-9 h-9 rounded-full border border-white/40"
                    aria-label="Open menu">
                    <span class="block w-4 h-0.5 bg-white mb-[3px]"></span>
                    <span class="block w-4 h-0.5 bg-white mb-[3px]"></span>
                    <span class="block w-4 h-0.5 bg-white"></span>
                </button>
            </div>
        </div>
    </nav>
</header>
