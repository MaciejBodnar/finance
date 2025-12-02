{{--
  Template Name: About
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
    <section class="bg-white py-12 md:pt-16 md:pb-32">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">

            <div class="w-full">
                <h2 class="text-[#0b285f] tk-tt-travels-next text-3xl md:text-5xl leading-tight">
                    {!! $about['hero_title'] !!}
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
                    <p class="tk-dm-sans-18pt text-[#233] leading-7">
                        {!! $about['intro_paragraph'] !!}
                    </p>
                </div>
            </div>

            <div class="mt-24 flex flex-col md:flex-row gap-8 lg:gap-14">
                <div>
                    <h3 class="tk-tt-travels-next text-[#0b285f] text-2xl md:text-3xl font-extrabold leading-tight">
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
                        <p class="tk-dm-sans text-[#233] leading-7">
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
                <h2 class="tk-tt-travels-next text-white text-3xl md:text-5xl">{!! $about['why_heading'] !!}</h2>
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
                    <div class="bg-white rounded-sm shadow-md border border-slate-100 px-8 py-12">
                        <div class="text-[#c9936d] mb-4 w-[72px] h-[72px]">
                            {!! $f['icon'] !!}
                        </div>
                        <h3 class="tk-tt-travels-next text-[#0b285f] text-2xl">{!! $f['title'] !!}</h3>
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
                <h2 class="tk-tt-travels-next text-3xl md:text-4xl">
                    {!! $about['testimonials_title'] !!}
                </h2>
                <div class="mt-6 flex flex-wrap items-center gap-4">
                    <div class="flex items-center gap-1">
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
                    </div>
                    <p class="text-white/90 md:text-base tk-dm-sans-18pt">{!! $about['testimonials_subtitle'] !!}</p>
                    <a href="{{ $about['testimonials_facebook_url'] }}"
                        class="inline-flex items-center gap-2 px-4 py-2 bg-[#0b285f] tk-dm-sans-18pt font-bold tracking-wide hover:bg-[#0a234f] transition">
                        <span class="pr-1">{{ $about['testimonials_facebook_text'] }}</span>
                        @if (!empty($about['testimonials_facebook_icon']))
                            {!! $about['testimonials_facebook_icon'] !!}
                        @endif
                    </a>
                </div>
            </div>
            <div class="mt-12">
                <div class="flex items-center justify-center gap-2 md:hidden">
                    @for ($i = 0; $i < count($about['testimonials']); $i++)
                        <button aria-label="Go to testimonial {{ $i + 1 }}"
                            class="testimonials-carousel-dot w-full h-0.5 rounded-full bg-[#122457]"></button>
                    @endfor
                </div>
                <div id="testimonials-carousel" class="overflow-hidden mt-10">
                    <div class="flex flex-nowrap md:grid md:grid-cols-2 lg:grid-cols-4 md:gap-10 transition-transform">
                        @foreach ($about['testimonials'] as $t)
                            <div class="w-full shrink-0 md:pt-8 md:border-t-2 md:border-white/70 px-4">
                                <p class="tk-dm-sans-18pt font-bold">{{ $t['name'] ?? '' }}</p>
                                <p class="mt-4 leading-relaxed">{{ $t['text'] ?? '' }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="kontakt" class="relative py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-1/2 z-0">
            <img src="{{ $about['about_contact_background_image'] ?? get_template_directory_uri() . '/resources/images/businessman-working.png' }}"
                alt="" class="w-full h-full object-cover opacity-70">
            <div class="absolute inset-0 bg-linear-to-b from-transparent to-white"></div>

        </div>
        <div class="relative max-w-4xl mx-auto px-4">
            <div class="text-center mb-10 md:mb-12">
                <h2 class="tk-tt-travels-next text-3xl md:text-5xl leading-tight text-[#0b285f]">
                    {!! $about['contact_heading'] !!}
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
