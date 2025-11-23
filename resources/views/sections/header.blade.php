<header class="w-full relative">

    <div class="bg-[#2d7e3b] text-white">
        <div class="max-w-6xl mx-auto flex items-center justify-between py-3 px-4 lg:px-0 text-sm">

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

                <div class="flex items-center gap-3 text-xs">
                    <button class="flex items-center gap-2">
                        <span class="font-semibold">PL</span>
                    </button>
                    <button class="flex items-center gap-1 text-white/60 hover:text-white transition">
                        <span class="font-semibold">EN</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <nav class="bg-[#122457] text-white">
        <div class="max-w-6xl mx-auto px-4 lg:px-0 py-6">
            <div class="flex items-center justify-between">

                <ul class="hidden md:flex items-center gap-8 text-sm">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#ffba6a] transition">
                            Strona Główna
                        </a>
                    </li>
                    <li>
                        <a href="#onas" class="hover:text-[#ffba6a] transition">
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
                        <a href="#blog" class="hover:text-[#ffba6a] transition">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#kontakt" class="hover:text-[#ffba6a] transition">
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

    <!-- Full-width Księgowość dialog panel -->
    <div id="ksiegowosc-panel" class="hidden absolute left-0 right-0 top-full z-50">
        <div class="bg-white text-[#0b285f] shadow-lg">
            <div class="max-w-6xl mx-auto px-4 lg:px-0 py-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h4 class="font-semibold mb-3">Usługi podstawowe</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/firmy-ltd" class="hover:underline">Firmy LTD</a></li>
                            <li><a href="/wlasna-dzialalnosc" class="hover:underline">Własna działalność</a></li>
                            <li><a href="/spolki-cywilne" class="hover:underline">Spółki cywilne</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-3">Rozszerzenia</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/dodatkowe-uslugi" class="hover:underline">Dodatkowe usługi</a></li>
                            <li><a href="/wirtualne-biuro" class="hover:underline">Wirtualne biuro</a></li>
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

    <script>
        (function() {
            const btn = document.getElementById('ksiegowosc-link');
            const panel = document.getElementById('ksiegowosc-panel');

            if (!btn || !panel) return;

            const closePanel = () => {
                panel.classList.add('hidden');
                btn.setAttribute('aria-expanded', 'false');
            };

            const openPanel = () => {
                panel.classList.remove('hidden');
                btn.setAttribute('aria-expanded', 'true');
            };

            btn.addEventListener('click', (e) => {
                e.preventDefault();
                if (panel.classList.contains('hidden')) openPanel();
                else closePanel();
            });

            // Close on outside click
            document.addEventListener('click', (e) => {
                if (panel.classList.contains('hidden')) return;
                if (e.target === btn || btn.contains(e.target)) return;
                if (panel.contains(e.target)) return;
                closePanel();
            });

            // Close on Escape
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closePanel();
            });
        })();
    </script>
</header>
