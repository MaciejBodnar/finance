{{--
  Template Name: About
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <section class="bg-white py-12 md:py-16">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">

            <div class="w-full">
                <h2 class="text-[#0b285f] text-3xl md:text-5xl font-extrabold leading-tight">
                    Poznajmy <span class="font-light">się</span>
                </h2>

                <div class="mt-6 flex items-start gap-3">
                    <div class="pt-1 flex gap-1">
                        <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                        <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                    </div>
                    <p class="text-[#233] leading-7">
                        OptimumTax to polskie biuro księgowe w Londynie działające na terenie Wielkiej Brytanii. Świadczymy
                        profesjonalne usługi doradcze, zarówno na rzecz osób prywatnych, jak i firm i instytucji. Zapewniamy
                        doradczą i kompleksową obsługę księgową w Londynie oraz pomagamy podejmować najkorzystniejsze
                        decyzje w kwestiach prawnych i finansowych.
                    </p>
                </div>

                <p class="mt-5 text-[#233] leading-7">
                    Nasze biuro księgowe mieści się w zachodnim Londynie, aczkolwiek świadczymy usługi na terenie całej
                    Wielkiej Brytanii. Zapewniamy fachową pomoc także na odległość, a nasi klienci zaoszczędzony w ten
                    sposób czas mogą poświęcić na rozwijanie działalności i pomnażanie zysków. Działamy w pełni
                    profesjonalnie, wykorzystując do tego wszystkie niezbędne narzędzia. Każdy nasz księgowy z Ealing
                    posiada bogate doświadczenie i wieloletnią praktykę.
                </p>
            </div>

            <div class="mt-12 flex flex-col md:flex-row gap-8 lg:gap-14">
                <div>
                    <h3 class="text-[#0b285f] text-2xl md:text-4xl font-extrabold leading-tight">
                        Rzetelna<br class="hidden md:block">informacja księgowa
                    </h3>

                    <div class="mt-6 flex items-start gap-3">
                        <div class="pt-1 flex gap-1">
                            <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5 8l7 8 7-8z" />
                            </svg>
                            <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5 8l7 8 7-8z" />
                            </svg>
                        </div>
                        <p class="text-[#233] leading-7">
                            Polski księgowy w zachodnim Londynie realizuje powierzone zlecenia, a przy tym dąży do
                            podnoszenia bezpieczeństwa podatkowego klientów, z którymi buduje partnerskie relacje. W oparciu
                            o wiedzę i doświadczenie zawodowe wskazujemy naszym klientom najlepsze rozwiązania,
                            przygotowujemy ich do zmian oraz pomagamy w realizacji kolejnych planów i inwestycji. Zaufanie
                            klientów jest dla nas największą nagrodą, dlatego robimy wszystko, aby nasze biuro księgowe było
                            znane z wysokiej jakości usług.
                        </p>
                    </div>
                </div>

                <div class="min-w-full md:min-w-[540px] h-[360px] overflow-hidden">
                    <img src="/mnt/data/Screenshot 2025-11-22 at 20.09.51.png" alt=""
                        class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </section>
    <section class="relative bg-[#c9936d] pt-16 md:pt-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-[88%]">
            <svg class="w-full h-full" viewBox="0 0 1440 700" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0 0H1440V520C1200 465 960 440 720 440C480 440 240 465 0 520Z" fill="#0b285f" />
            </svg>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 lg:px-0">
            <div class="text-center">
                <h2 class="text-white text-3xl md:text-5xl font-extrabold">Dlaczego my?</h2>
                <div class="mt-10 flex items-center justify-center gap-1">
                    <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 8l7 8 7-8z" />
                    </svg>
                    <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 8l7 8 7-8z" />
                    </svg>
                </div>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <div class="bg-white rounded-sm shadow-md border border-slate-100 p-8">
                    <div class="text-[#c9936d] mb-4">
                        <svg class="w-[72px] h-[72px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <rect x="3" y="3" width="8" height="12" rx="1.5"></rect>
                            <rect x="13" y="3" width="8" height="6" rx="1.5"></rect>
                            <path d="M13 12h8M13 16h8M3 17h8M6 7h2M6 10h2"></path>
                        </svg>
                    </div>
                    <h3 class="text-[#0b285f] text-2xl">Zapewniamy kompleksową księgowość</h3>
                    <svg class="w-8 h-8 text-[#CB9264] mt-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 8l7 8 7-8z" />
                    </svg>
                    <div class="mt-6 text-[#0b285f] leading-6">
                        Zajmiemy się wszystkim za Ciebie, dzięki czemu skupisz się na podstawowej działalności i będziesz
                        mógł rozwijać swoją firmę.
                    </div>
                </div>

                <div class="bg-white rounded-sm shadow-md border border-slate-100 p-8">
                    <div class="text-[#c9936d] mb-4">
                        <svg class="w-[72px] h-[72px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <circle cx="8" cy="7" r="3"></circle>
                            <circle cx="16" cy="7" r="3"></circle>
                            <path d="M3 21v-2a5 5 0 0 1 5-5h0a5 5 0 0 1 5 5v2M11 21v-2a5 5 0 0 1 5-5h0a5 5 0 0 1 5 5v2">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-[#0b285f] text-2xl">Współpracujemy z najlepszymi
                        specjalistami
                    </h3>
                    <svg class="w-8 h-8 text-[#CB9264] mt-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 8l7 8 7-8z" />
                    </svg>
                    <div class="mt-6 text-[#0b285f] leading-6">
                        Oferujemy wsparcie w wielu dziedzinach – pomożemy Ci odzyskać odszkodowania, załatwić kredyt i
                        rozwiązywać wiele problemów.
                    </div>
                </div>

                <div class="bg-white rounded-sm shadow-md border border-slate-100 p-8">
                    <div class="text-[#c9936d] mb-4">
                        <svg class="w-[72px] h-[72px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <circle cx="12" cy="12" r="9"></circle>
                            <path d="M8 12l2 2 4-5"></path>
                            <path d="M12 3v3M21 12h-3M12 21v-3M3 12h3"></path>
                        </svg>
                    </div>
                    <h3 class="text-[#0b285f] text-2xl">Wypracowaliśmy wysokie standardy</h3>
                    <svg class="w-8 h-8 text-[#CB9264] mt-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 8l7 8 7-8z" />
                    </svg>
                    <div class="mt-6 text-[#0b285f] leading-6">
                        Zajmiemy się wszystkim za Ciebie, dzięki czemu skupisz się na podstawowej działalności i będziesz
                        mógł rozwijać swoją firmę.
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-[#2d7e3b] text-white py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">
            <div class="max-w-232">
                <h2 class="text-3xl md:text-6xl lg:text-7xl leading-tight font-light">
                    Nie musisz nam wierzyć na słowo –
                    <span class="font-extrabold">zobacz, co mówią inni.</span>
                </h2>
                <div class="mt-6 flex flex-wrap items-center gap-4">
                    <div class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-[#0b285f]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                        <svg class="w-4 h-4 text-[#0b285f]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                    </div>
                    <p class="text-white/90 text-sm md:text-base">Zobacz pełne recenzje na naszym Facebooku.</p>
                    <a href="https://facebook.com"
                        class="inline-flex items-center gap-2 px-4 py-2 bg-[#0b285f] rounded-sm text-sm font-bold tracking-wide hover:bg-[#0a234f] transition">
                        ZOBACZ
                        <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M7 17L17 7" />
                            <path d="M8 7h9v9" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="mt-12 grid gap-10 md:gap-12 md:grid-cols-2 lg:grid-cols-4">
                <div class="pt-8 border-t border-white/70">
                    <p class="font-semibold">Ewa Foryszewska–Jarzyńska</p>
                    <p class="mt-4 leading-relaxed">Bardzo polecam! Profesjonalnie i miło.</p>
                </div>

                <div class="pt-8 border-t border-white/70">
                    <p class="font-semibold">Tomasz Ostapiuk</p>
                    <p class="mt-4 leading-relaxed">Highly Recommended, I been using Optimum Tax for many years and I’m
                        highly recommend them to everyone that want them accounts in place &amp; order. Thank you Optimum
                        Tax team for keeping up good work</p>
                </div>

                <div class="pt-8 border-t border-white/70">
                    <p class="font-semibold">Jagoda Katarzyna</p>
                    <p class="mt-4 leading-relaxed">Kompetentna i miła obsługa, indywidualne podejście do klienta, wszystko
                        zrealizowane w terminie 🙂</p>
                </div>

                <div class="pt-8 border-t border-white/70">
                    <p class="font-semibold">Aleksandra Prokop</p>
                    <p class="mt-4 leading-relaxed">Usługi na wysokim poziomie – rzetelnie, terminowo i profesjonalnie.
                        Dzięki takiemu wsparciu można mieć pewność, że wszystko będzie dopięte na ostatni guzik. Polecam!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="kontakt" class="relative py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-1/2">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/businessman-working.png" alt=""
                class="w-full h-full object-cover opacity-70">
        </div>

        <div class="relative max-w-4xl mx-auto px-4">
            <div class="text-center mb-10 md:mb-12">
                <h2 class="text-3xl md:text-5xl font-extrabold leading-tight text-[#0b285f]">Postaw na pewność i spokój,
                </h2>
                <p class="text-2xl md:text-4xl leading-tight text-[#6f7ea6] -mt-1">powierz księgowość ekspertom</p>
            </div>

            <form action="#" method="post" class="space-y-5 text-sm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block mb-1 text-[#0b285f]">Imię</label>
                        <input type="text"
                            class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    </div>
                    <div>
                        <label class="block mb-1 text-[#0b285f]">Nazwisko</label>
                        <input type="text"
                            class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block mb-1 text-[#0b285f]">Email</label>
                        <input type="email"
                            class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    </div>
                    <div>
                        <label class="block mb-1 text-[#0b285f]">Numer Kontaktowy</label>
                        <input type="text"
                            class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    </div>
                </div>

                <div>
                    <label class="block mb-1 text-[#0b285f]">Temat</label>
                    <input type="text"
                        class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                </div>

                <div>
                    <label class="block mb-1 text-[#0b285f]">Wiadomość</label>
                    <textarea rows="6"
                        class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 resize-y focus:outline-none focus:ring-2 focus:ring-[#0b285f]"></textarea>
                </div>

                <div class="flex items-start gap-3">
                    <input type="checkbox"
                        class="mt-1 w-4 h-4 border-2 border-[#0b285f] rounded-none focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    <p class="text-[12px] leading-relaxed text-[#3b445b]">Niniejszym oświadczam, że zapoznałem się z
                        polityką prywatności i wyrażam zgodę na przetwarzanie przez Optimum Tax LTD z siedzibą przy 86
                        Boston Road, London W7 3TR moich danych osobowych w zakresie niezbędnym do realizacji świadczonych
                        usług na moją rzecz. Jednocześnie potwierdzam, że mam ukończone 16 lat i jestem świadomy, że
                        przysługuje mi prawo do wglądu w moje dane osobowe oraz prawo do udzielenia zgody i żądania
                        usunięcia moich danych osobowych.</p>
                </div>

                <div class="pt-2 text-center">
                    <button type="submit"
                        class="inline-flex items-center justify-center px-8 py-3 bg-[#0b285f] text-white font-semibold tracking-wide rounded-none hover:bg-[#0a234f] transition">KONTAKT</button>
                </div>
            </form>
        </div>
    </section>
@endsection
