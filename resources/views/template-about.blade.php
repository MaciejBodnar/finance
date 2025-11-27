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
                    {!! $about['hero_title_html'] !!}
                </h2>

                <div class="mt-6 flex items-start gap-3">
                    <div class="pt-1 flex gap-1">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                    </div>
                    <p class="text-[#233] leading-7">
                        {!! $about['intro_paragraph'] !!}
                    </p>
                </div>
            </div>

            <div class="mt-12 flex flex-col md:flex-row gap-8 lg:gap-14">
                <div>
                    <h3 class="text-[#0b285f] text-2xl md:text-4xl font-extrabold leading-tight">
                        {!! $about['mission_title'] !!}
                    </h3>

                    <div class="mt-6 flex items-start gap-3">
                        <div class="pt-1 flex gap-1">
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                            </svg>
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                            </svg>
                        </div>
                        <p class="text-[#233] leading-7">
                            {!! $about['intro_paragraph_2'] !!}
                        </p>
                    </div>
                </div>

                <div class="min-w-full md:min-w-[540px] h-[360px] overflow-hidden">
                    <img src="{{ $about['about_image'] }}" alt="" class="w-full h-full object-cover">
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
                <h2 class="text-white text-3xl md:text-5xl font-extrabold">{!! $about['why_heading'] !!}</h2>
                <div class="mt-10 flex items-center justify-center gap-1">
                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                    </svg>
                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                    </svg>
                </div>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @foreach ($about['our_work'] as $f)
                    <div class="bg-white rounded-sm shadow-md border border-slate-100 p-8">
                        <div class="text-[#c9936d] mb-4">
                            <svg class="w-[72px] h-[72px]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6">
                                <rect x="3" y="3" width="8" height="12" rx="1.5"></rect>
                                <rect x="13" y="3" width="8" height="6" rx="1.5"></rect>
                                <path d="M13 12h8M13 16h8M3 17h8M6 7h2M6 10h2"></path>
                            </svg>
                        </div>
                        <h3 class="text-[#0b285f] text-2xl">{{ $f['title'] }}</h3>
                        <svg class="w-8 h-8 text-[#CB9264] mt-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                        <div class="mt-6 text-[#0b285f] leading-6">
                            {{ $f['text'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="bg-[#2d7e3b] text-white py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">
            <div class="max-w-232">
                <h2 class="text-3xl md:text-6xl lg:text-7xl leading-tight font-light">
                    {!! $about['testimonials_title'] !!}
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
                    <p class="text-white/90 text-sm md:text-base">{!! $about['testimonials_subtitle'] !!}</p>
                    <a href="{{ $about['testimonials_facebook_url'] }}"
                        class="inline-flex items-center gap-2 px-4 py-2 bg-[#0b285f] rounded-sm text-sm font-bold tracking-wide hover:bg-[#0a234f] transition">
                        {{ $about['testimonials_facebook_text'] }}
                        @if (!empty($about['testimonials_facebook_icon']))
                            {!! $about['testimonials_facebook_icon'] !!}
                        @endif
                    </a>
                </div>
            </div>

            <div class="mt-12 grid gap-10 md:gap-12 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($about['testimonials'] as $t)
                    <div class="pt-8 border-t border-white/70">
                        <p class="font-semibold">{{ $t['name'] ?? '' }}</p>
                        <p class="mt-4 leading-relaxed">{{ $t['text'] ?? '' }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="kontakt" class="relative py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-1/2">
            <img src="{{ $about['about_contact_background_image'] ?? get_template_directory_uri() . '/resources/images/businessman-working.png' }}"
                alt="" class="w-full h-full object-cover opacity-70">
        </div>

        <div class="relative max-w-4xl mx-auto px-4">
            <div class="text-center mb-10 md:mb-12">
                <h2 class="text-3xl md:text-5xl font-extrabold leading-tight text-[#0b285f]">{!! $about['contact_heading'] !!}
                </h2>
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
