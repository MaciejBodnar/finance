{{--
  Template Name: Accountancy Page
--}}

@extends('layouts.app')

@section('content')
    <section class="relative">
        <div
            class="max-w-6xl px-4 lg:px-0 pb-[700px] md:pb-40 flex flex-col md:flex-row min-w-full gap-8 lg:gap-64 md:justify-end">
            <div class="ml-0 md:ml-10 justify-self-end">
                <h1 class="text-[#0b285f] text-3xl md:text-5xl font-light leading-tight mt-24 max-w-[732px]">
                    Wirtualne biuro i księgowość w UK
                </h1>
                <div class="flex gap-10 mt-24">
                    <div class="flex items-start gap-1">
                        <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                        <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                    </div>
                    <div class="space-y-5 text-[#233] leading-7 max-w-prose">
                        <p>Naszą dodatkową usługą jest wirtualne biuro, które pozwoli Ci legalnie założyć firmę w Wielkiej
                            Brytanii, nawet bez konieczności posiadania własnego adresu. Jak to możliwe?</p>
                        <p>Nasza księgowa i biuro księgowe w Londynie udostępnia Ci firmowy adres, dzięki któremu możliwe
                            jest
                            zarejestrowanie działalności i prowadzenie korespondencji z klientami. Adres ten będziesz mógł
                            zgłosić zarówno w rejestrze firm, jak i w urzędzie skarbowym – jest to rozwiązanie w pełni
                            legalne,
                            z którego korzysta wielu Polaków, pragnących prowadzić działalność w Wielkiej Brytanii. Oprócz
                            tego,
                            na korespondencję z adresu naszego polskiego biura rachunkowego, będziesz również otrzymywał
                            firmową
                            korespondencję, którą wyślemy na wskazany przez Ciebie adres.</p>
                    </div>
                </div>
            </div>
            <div class="md:justify-self-end min-w-full md:min-w-[690px] h-full md:h-[914px] rounded-md overflow-hidden">
                <img src="{{ get_template_directory_uri() }}/resources/images/asian-business-woman.png" alt=""
                    class="w-full h-full object-cover">
            </div>
        </div>
        <!-- Desktop / md+ background -->
        <div class="absolute bottom-0 w-full min-h-[322px] hidden md:flex items-center"
            style="background-image: url('{{ get_template_directory_uri() }}/resources/images/Subtraction.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-auto gap-10">
                <img src="{{ get_template_directory_uri() }}/resources/images/telefon.png" alt="Księgowa na fotelu"
                    class="static max-md:order-last md:absolute bottom-0 left-40 object-cover" />
                <div>

                </div>
                <div class="flex flex-col gap-12">
                    <h2 class="text-4xl text-white max-w-[236px]">Umów się na spotkanie</h2>
                    <a
                        class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">Umów
                        się</a>
                </div>
                <div>
                    <p class="text-white">Nasi księgowi w Hanwell są cały czas do Twojej dyspozycji – zadzwoń albo
                        napisz,
                        by umówić się na spotkanie. Zajmiemy się Twoją sprawą w sposób rzetelny i kompleksowy!
                    </p>
                </div>
            </div>
        </div>

        <!-- Mobile background (visible on small screens) -->
        <div class="absolute bottom-0 max-w-screen min-h-[322px] flex md:hidden items-center"
            style="background-image: url('{{ get_template_directory_uri() }}/resources/images/Subtraction-6.png'); background-size: cover; background-repeat: no-repeat;">
            <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-10 md:mx-auto gap-10">
                <img src="{{ get_template_directory_uri() }}/resources/images/telefon.png" alt="Księgowa na fotelu"
                    class="static max-md:order-last md:absolute bottom-0 left-40 object-cover" />
                <div>

                </div>
                <div class="flex flex-col gap-12">
                    <h2 class="text-4xl text-white max-w-[236px]">Umów się na spotkanie</h2>
                    <a
                        class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">Umów
                        się</a>
                </div>
                <div>
                    <p class="text-white">Nasi księgowi w Hanwell są cały czas do Twojej dyspozycji – zadzwoń albo
                        napisz,
                        by umówić się na spotkanie. Zajmiemy się Twoją sprawą w sposób rzetelny i kompleksowy!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#f3f5f7] relative min-h-[718px]">
        <div
            class="max-w-6xl px-4 lg:px-0 flex flex-col md:flex-row min-w-full gap-8 lg:gap-24 items-center pb-[700px] md:pb-40">
            <div
                class="min-w-full order-last md:order-first md:min-w-[690px] min-h-full md:min-h-[718px] rounded-md overflow-hidden">
                <img src="{{ get_template_directory_uri() }}/resources/images/modern.png" alt=""
                    class="w-full h-full object-cover">
            </div>
            <div class="mr-10 justify-self-start">
                <h2 class="text-[#0b285f] text-3xl md:text-5xl font-light leading-tight">
                    Wirtualne biuro i księgowość w UK
                </h2>
                <div class="flex gap-10">
                    <div class="mt-6 flex items-start gap-1">
                        <svg class="w-8 h-8 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                        <svg class="w-8 h-8 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                    </div>
                    <div class="mt-6 space-y-5 text-[#233] leading-7 max-w-prose">
                        <p>Z oferowanego przez nas wirtualnego biura skorzystało już wielu przedsiębiorców. W pakiecie
                            otrzymali
                            oni także fachowe doradztwo księgowe w Londynie oraz całej Wielkiej Brytanii. Dzięki temu mogą
                            oni w
                            spokoju zajmować się swoją firmą i jej rozwojem, a my prowadzimy ich księgowość w UK.</p>
                        <p>Jeśli jesteś zainteresowany tą usługą, zapraszamy do kontaktu. Nasz księgowy w Ealing chętnie
                            przedstawi Ci w pełni spersonalizowaną ofertę, która z pewnością spełni Twoje oczekiwania.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Desktop / md+ background -->
        <div class="absolute bottom-0 w-full min-h-[322px] hidden md:flex items-center"
            style="background-image: url('{{ get_template_directory_uri() }}/resources/images/Subtraction.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-auto gap-10">
                <img src="{{ get_template_directory_uri() }}/resources/images/telefon.png" alt="Księgowa na fotelu"
                    class="static max-md:order-last md:absolute bottom-0 left-40 object-cover" />
                <div>

                </div>
                <div class="flex flex-col gap-12">
                    <h2 class="text-4xl text-white max-w-[236px]">Umów się na spotkanie</h2>
                    <a
                        class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">Umów
                        się</a>
                </div>
                <div>
                    <p class="text-white">Nasi księgowi w Hanwell są cały czas do Twojej dyspozycji – zadzwoń albo
                        napisz,
                        by umówić się na spotkanie. Zajmiemy się Twoją sprawą w sposób rzetelny i kompleksowy!
                    </p>
                </div>
            </div>
        </div>

        <!-- Mobile background (visible on small screens) -->
        <div class="absolute bottom-0 max-w-screen min-h-[322px] flex md:hidden items-center"
            style="background-image: url('{{ get_template_directory_uri() }}/resources/images/Subtraction-6.png'); background-size: cover; background-repeat: no-repeat;">
            <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-10 md:mx-auto gap-10">
                <img src="{{ get_template_directory_uri() }}/resources/images/telefon.png" alt="Księgowa na fotelu"
                    class="static max-md:order-last md:absolute bottom-0 left-40 object-cover" />
                <div>

                </div>
                <div class="flex flex-col gap-12">
                    <h2 class="text-4xl text-white max-w-[236px]">Umów się na spotkanie</h2>
                    <a
                        class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">Umów
                        się</a>
                </div>
                <div>
                    <p class="text-white">Nasi księgowi w Hanwell są cały czas do Twojej dyspozycji – zadzwoń albo
                        napisz,
                        by umówić się na spotkanie. Zajmiemy się Twoją sprawą w sposób rzetelny i kompleksowy!
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
