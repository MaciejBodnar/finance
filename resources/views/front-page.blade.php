{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')
    <section class="bg-[#122457]">
        <div class="relative">
            <div class="relative min-h-[830px] max-w-6xl mx-auto px-8 lg:px-0 grid lg:grid-cols-2 pb-[640px] md:pb-0">
                <div class="space-y-8 pt-20">
                    <h1 class="tk-tt-travels-next font-bold text-3xl md:text-5xl text-[#CB9264] max-w-[450px]">
                        {!! $main['hero']['title'] !!}
                    </h1>
                    <p class="tk-dm-sans-18pt text-sm md:text-base leading-relaxed text-[#f5f7ff]">
                        {!! $main['hero']['description'] !!}
                    </p>
                </div>

                <img src="{{ $main['hero']['hero_image'] }} " alt="Księgowa na fotelu" class="object-cover" />


            </div>
            <div class="absolute bottom-0 w-full min-h-[322px] hidden md:flex items-center"
                style="background-image: url('{{ get_template_directory_uri() }}/resources/images/Subtraction.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-auto gap-10">
                    <img src="{{ $main['cta_section']['image'] }}" alt="Kobieta z telefonem"
                        class="static max-md:order-last md:absolute bottom-0 md:left-auto object-cover" />
                    <div>

                    </div>
                    <div class="flex flex-col gap-12">
                        <h2 class="tk-tt-travels-next font-bold text-4xl text-white max-w-[300px]">
                            {!! $main['cta_section']['title'] !!}
                        </h2>
                        <a href="{{ $main['cta_section']['book_now_url'] }}"
                            class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white tk-dm-sans-18pt uppercase">{{ $main['cta_section']['book_now_text'] }}</a>
                    </div>
                    <div>
                        <p class="text-white">{!! $main['cta_section']['description'] !!}</p>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-0 max-w-screen min-h-[322px] flex md:hidden items-center"
                style="background-image: url('{{ get_template_directory_uri() }}/resources/images/Subtraction-6.png'); background-repeat: no-repeat;">
                <div
                    class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mt-10 mx-10 md:mx-auto gap-10">
                    <img src="{{ get_template_directory_uri() }}/resources/images/telefon.png" alt="Księgowa z telefonem"
                        class="static max-md:order-last md:absolute bottom-0 left-40 object-cover" />
                    <div>
                    </div>
                    <div class="flex flex-col gap-12 order-2">
                        <h2 class="tk-tt-travels-next hidden md:block font-bold text-4xl text-white max-w-[300px]">
                            {!! $main['cta_section']['title'] !!}
                        </h2>
                        <a href="{{ $main['cta_section']['book_now_url'] }}"
                            class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">{{ $main['cta_section']['book_now_text'] }}</a>
                    </div>
                    <div class="order-1">
                        <h2 class="tk-tt-travels-next md:hidden font-bold text-4xl mb-5 text-white max-w-[300px]">
                            {!! $main['cta_section']['title'] !!}
                        </h2>
                        <p class="text-white">{!! $main['cta_section']['description'] !!}</p>
                    </div>
                </div>
            </div>

    </section>
    <section id="uslugi" class="bg-white py-16 md:py-24">
        <div class="max-w-5xl mx-auto px-8 lg:px-0">

            <div class="grid gap-10 lg:gap-16 items-start">
                <h2 class="tk-tt-travels-next text-[#0b285f] max-w-[480px] text-3xl md:text-5xl">
                    {{ $main['services']['title'] }}
                </h2>

                <div class="space-y-5 text-[#233] text-sm md:text-base leading-relaxed">
                    <div class="flex items-start gap-3">
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
                        <div class="relative">
                            <p data-clamp-id="intro-1"
                                class="tk-dm-sans-18pt text-[#233] text-sm md:text-base leading-relaxed line-clamp-8 md:line-clamp-none">
                                {!! $main['services']['description'] !!}
                            </p>

                            <div class="md:hidden border-t border-[#8FB3D4] my-10 justify-center flex">
                                <button data-clamp-toggle="intro-1" aria-expanded="false"
                                    class="mt-3 md:hidden text-sm font-semibold text-[#8FB3D4]">
                                    Rozwiń
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-8 lg:px-0">
            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-5">
                @php $serviceItems = $main['services']['items'] ?? []; @endphp
                @foreach ($serviceItems as $it)
                    <a href="{{ $it['href'] ?? '#' }}"
                        class="group relative bg-[#2d7e3b] text-white pb-9 px-9 pt-10 min-h-fit gap-4 flex flex-row md:flex-col focus:ring-offset-2 focus:ring-[#2d7e3b] focus:ring-offset-white hover:brightness-110 transition">
                        <div class="text-white/95">
                            <div class="text-white mb-4">
                                {!! $it['icon_svg'] ?? ($it['icon'] ?? '') !!}
                            </div>
                            <div class="text-xl tk-tt-travels-next" aria-hidden="true">
                                {!! $it['label_1'] !!} <br><span class="font-bold">{!! $it['label_2'] !!}</span>
                            </div>
                        </div>

                        <div class="flex items-start md:items-center gap-2">
                            <svg class="w-8 h-8 text-white transition-transform group-hover:translate-y-0.5"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5 8l7 8 7-8z" />
                            </svg>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </section>
    <section id="blog" class="relative bg-[#c9936d] text-white py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-[88%]">
            <svg class="w-full h-full" viewBox="0 0 1440 700" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0 0H1440V520C1200 465 960 440 720 440C480 440 240 465 0 520Z" fill="#0b285f" />
            </svg>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 lg:px-0">
            <div class="text-center">
                <h2 class="tk-tt-travels-next text-3xl md:text-5xl font-bold">{{ $main['blog']['title'] }}</h2>
                <div class="mt-3 flex items-center justify-center">
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

            <div class="mt-12 grid gap-8 md:grid-cols-3 place-items-center">
                @php
                    $data = \App\View\Blog::recentPosts(3);
                    $posts = $data['posts'] ?? [];
                @endphp

                @foreach ($posts as $p)
                    @php
                        $img =
                            $p['thumbnail'] ?:
                            get_template_directory_uri() . '/resources/images/businesswoman-working.png';
                    @endphp
                    <a href="{{ $p['link'] }}"
                        class="group relative bg-white text-[#0b285f] rounded-md shadow-xl hover:shadow-2xl transition h-full w-full max-w-[330px] md:max-w-full {{ $loop->index > 0 ? 'hidden md:block' : '' }}">
                        <div class="min-h-48 px-10 pt-8 pb-3 w-full overflow-hidden">
                            <img src="{{ $img }}" alt="{{ $p['title'] }}"
                                class="w-full h-full object-contain" />
                        </div>
                        <div class="px-10 pb-8">
                            <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                                <svg class="w-4 h-4 text-[#0b285f]" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.6">
                                    <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                    <path d="M16 2v4M8 2v4M3 10h18"></path>
                                </svg>
                                <span>{{ $p['date'] }}</span>
                            </div>
                            <h3 class="text-lg font-semibold leading-snug group-hover:underline mb-3 line-clamp-3">
                                <span class="text-[#2d7e3b]">{!! $p['title'] !!}</span> {!! $p['title_2'] !!}
                            </h3>
                            <p class="text-sm text-slate-600 line-clamp-2">{{ $p['excerpt'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-10 text-center">
                <a href="{{ $main['blog']['url'] ?? '/blog' }}"
                    class="inline-flex items-center justify-center px-8 py-3 bg-[#0b285f] text-white font-semibold rounded-md hover:bg-[#0a214f] transition">{{ $main['blog']['read_more_text'] ?? 'CZYTAJ WIĘCEJ' }}</a>
            </div>
        </div>
    </section>
    <section class="bg-[#2d7e3b] text-white py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-8 lg:px-0">
            <div class="max-w-232">
                <h2 class="tk-tt-travels-next text-3xl md:text-4xl">
                    {{ $main['testimonials']['title'] }}
                </h2>
                <div class="mt-6 flex gap-4">
                    <div class="flex gap-1">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#122457" />
                        </svg>
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#122457" />
                        </svg>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4 md:gap-20 items-center">
                        <p class="text-white/90 text-sm md:text-base">{{ $main['testimonials']['subtitle'] }}</p>
                        <a href="{{ $main['testimonials']['cta_url'] }}"
                            class="inline-flex items-center gap-2 px-4 py-2 bg-[#0b285f] rounded-sm text-sm font-bold tracking-wide hover:bg-[#0a234f] transition">
                            {{ $main['testimonials']['cta_text'] }}
                            @if (!empty($main['testimonials']['facebook_icon']))
                                {!! $main['testimonials']['facebook_icon'] !!}
                            @endif
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <div class="flex items-center justify-center gap-2 md:hidden">
                    @for ($i = 0; $i < count($main['testimonials']['testimonials']); $i++)
                        <button aria-label="Go to testimonial {{ $i + 1 }}"
                            class="testimonials-carousel-dot w-full h-0.5 rounded-full bg-[#122457]"></button>
                    @endfor
                </div>
                <div id="testimonials-carousel" class="overflow-hidden mt-10">
                    <div class="flex flex-nowrap md:grid md:grid-cols-2 lg:grid-cols-4 md:gap-10 transition-transform">
                        @foreach ($main['testimonials']['testimonials'] as $t)
                            <div class="w-full shrink-0 md:pt-8 md:border-t-2 md:border-white/70 px-4">
                                <p class="font-semibold">{{ $t['name'] ?? '' }}</p>
                                <p class="mt-4 leading-relaxed tk-dm-sans-36pt ">{{ $t['text'] ?? '' }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="kontakt" class="relative py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-1/2 z-0">
            <img src="{{ $main['contact_section']['background_image'] }}" alt=""
                class="w-full h-full object-cover opacity-70">
        </div>

        <div class="relative max-w-4xl mx-auto px-8 lg:px-0">
            <div class="text-center mb-10 md:mb-12">
                <h2 class="tk-tt-travels-next font-bold text-3xl md:text-5xl leading-tight text-[#0b285f]">
                    {!! $main['contact_section']['heading'] !!}
                </h2>
            </div>
            @if (function_exists('pll_current_language'))
                @if (pll_current_language() === 'pl')
                    {!! do_shortcode('[contact-form-7 id="f2cab71" title="Optimum Tax LTD - PL"]') !!}
                @else
                    {!! do_shortcode('[contact-form-7 id="10554d1" title="Optimum Tax LTD - EN"]') !!}
                @endif
            @else
                {!! do_shortcode('[contact-form-7 id="f2cab71" title="Optimum Tax LTD - PL"]') !!}
            @endif
        </div>
    </section>
@endsection
