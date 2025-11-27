{{--
  Template Name: Accountancy Page
--}}

@extends('layouts.app')

@section('content')
    <section class="relative">
        @php
            $mdPbClass = !empty($accountancy['cta_top_enabled']) ? 'pb-[700px] md:pb-40' : 'pb-10 md:pb-0';
        @endphp
        <div
            class="max-w-6xl px-4 lg:px-0 {{ $mdPbClass }} flex flex-col md:flex-row min-w-full gap-8 lg:gap-64 md:justify-end">
            <div class="ml-0 md:ml-10 justify-self-end">
                <h1 class="text-[#0b285f] text-3xl md:text-5xl font-light leading-tight mt-24 max-w-[732px]">
                    {!! $accountancy['hero']['title_html'] !!}
                </h1>
                <div class="flex gap-10 mt-24">
                    <div class="flex items-start gap-1">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                    </div>
                    <div class="space-y-5 text-[#233] leading-7 max-w-prose">
                        <p>{!! $accountancy['hero']['intro_paragraph'] !!}</p>
                    </div>
                </div>
            </div>
            <div class="md:justify-self-end min-w-full md:min-w-[690px] h-full md:h-[914px] overflow-hidden">
                <img src="{{ $accountancy['hero']['image'] }}" alt="" class="w-full h-full object-cover">
            </div>
        </div>
        <!-- Desktop / md+ background -->
        @if (!empty($accountancy['cta_top_enabled']))
            <div class="absolute bottom-0 w-full min-h-[322px] hidden md:flex items-center"
                style="background-image: url('{{ $accountancy['background']['desktop'] }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-auto gap-10">
                    <img src="{{ $accountancy['background']['phone_icon'] }}" alt="Księgowa na fotelu"
                        class="static max-md:order-last md:absolute bottom-0 left-40 object-cover" />
                    <div>

                    </div>
                    <div class="flex flex-col gap-12">
                        <h2 class="text-4xl text-white max-w-[236px]">{!! $accountancy['cta_top']['heading'] !!}</h2>
                        <a href="{{ $accountancy['cta_top']['button_url'] }}"
                            class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">{{ $accountancy['cta_top']['button_text'] }}</a>
                    </div>
                    <div>
                        <p class="text-white">{!! $accountancy['cta_top']['paragraph'] !!}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Mobile background (visible on small screens) -->
        @if (!empty($accountancy['cta_top_enabled']))
            <div class="absolute bottom-0 max-w-screen min-h-[322px] flex md:hidden items-center"
                style="background-image: url('{{ $accountancy['background']['mobile'] }}'); background-size: cover; background-repeat: no-repeat;">
                <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-10 md:mx-auto gap-10">
                    <img src="{{ $accountancy['background']['phone_icon'] }}" alt="Księgowa na fotelu"
                        class="static max-md:order-last md:absolute bottom-0 left-40 object-cover" />
                    <div>

                    </div>
                    <div class="flex flex-col gap-12">
                        <h2 class="text-4xl text-white max-w-[236px]">{!! $accountancy['cta_top']['heading'] !!}</h2>
                        <a href="{{ $accountancy['cta_top']['button_url'] }}"
                            class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">{{ $accountancy['cta_top']['button_text'] }}</a>
                    </div>
                    <div>
                        <p class="text-white">{!! $accountancy['cta_top']['paragraph'] !!}
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </section>

    <section class="bg-[#f3f5f7] relative min-h-[718px]">
        @php
            $mdPbBottomClass = !empty($accountancy['cta_bottom_enabled']) ? ' pb-[700px] md:pb-40' : 'pb-10 md:pb-0';
        @endphp
        <div
            class="max-w-6xl px-4 lg:px-0 flex flex-col md:flex-row min-w-full gap-8 lg:gap-24 items-center {{ $mdPbBottomClass }}">
            <div class="min-w-full order-last md:order-first md:min-w-[690px] min-h-full md:min-h-[718px] overflow-hidden">
                <img src="{{ $accountancy['section_two']['image'] }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="mr-10 justify-self-start">
                <h2 class="text-[#0b285f] text-3xl md:text-5xl font-light leading-tight">
                    {!! $accountancy['section_two']['title'] !!}
                </h2>
                <div class="flex gap-10">
                    <div class="mt-6 flex items-start gap-1">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                    </div>
                    <div class="mt-6 space-y-5 text-[#233] leading-7 max-w-prose">
                        <p>{!! $accountancy['section_two']['paragraph'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Desktop / md+ background (bottom CTA) -->
        @if (!empty($accountancy['cta_bottom_enabled']))
            <div class="absolute bottom-0 w-full min-h-[322px] hidden md:flex items-center"
                style="background-image: url('{{ $accountancy['background']['desktop'] }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-auto gap-10">
                    <img src="{{ $accountancy['background']['phone_icon'] }}" alt="Księgowa na fotelu"
                        class="static max-md:order-last md:absolute bottom-0 left-40 object-cover" />
                    <div>

                    </div>
                    <div class="flex flex-col gap-12">
                        <h2 class="text-4xl text-white max-w-[236px]">{!! $accountancy['cta_bottom']['heading'] !!}</h2>
                        <a href="{{ $accountancy['cta_bottom']['button_url'] }}"
                            class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">{{ $accountancy['cta_bottom']['button_text'] }}</a>
                    </div>
                    <div>
                        <p class="text-white">{!! $accountancy['cta_bottom']['paragraph'] !!}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Mobile background (visible on small screens) (bottom CTA) -->
        @if (!empty($accountancy['cta_bottom_enabled']))
            <div class="absolute bottom-0 max-w-screen min-h-[322px] flex md:hidden items-center"
                style="background-image: url('{{ $accountancy['background']['mobile'] }}'); background-size: cover; background-repeat: no-repeat;">
                <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-10 md:mx-auto gap-10">
                    <img src="{{ $accountancy['background']['phone_icon'] }}" alt="Księgowa na fotelu"
                        class="static max-md:order-last md:absolute bottom-0 left-40 object-cover" />
                    <div>

                    </div>
                    <div class="flex flex-col gap-12">
                        <h2 class="text-4xl text-white max-w-[236px]">{!! $accountancy['cta_bottom']['heading'] !!}</h2>
                        <a href="{{ $accountancy['cta_bottom']['button_url'] }}"
                            class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">{{ $accountancy['cta_bottom']['button_text'] }}</a>
                    </div>
                    <div>
                        <p class="text-white">{!! $accountancy['cta_bottom']['paragraph'] !!}
                        </p>
                    </div>
                </div>
            </div>
        @endif
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
