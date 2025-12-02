{{--
  Template Name: Accountancy Page
--}}

@extends('layouts.app')

@section('content')
    <section class="relative">
        @php
            $mdPbClass = !empty($accountancy['cta_top_enabled']) ? 'pb-[700px] md:pb-64 lg:pb-40' : 'pb-10 md:pb-0';
        @endphp
        <div
            class="max-w-6xl px-4 lg:px-0 {{ $mdPbClass }} flex flex-col md:flex-row min-w-full gap-8 lg:gap-24 md:justify-end">
            <div class="ml-0 md:ml-10 justify-self-end">
                <h1 class="tk-tt-travels-next text-[#0b285f] text-3xl md:text-5xl leading-tight mt-24 max-w-[732px]">
                    {!! $accountancy['hero']['title'] !!}
                </h1>
                <div class="flex gap-2 md:gap-10 mt-8 md:mt-24">
                    <div class="flex items-start gap-1 mt-2">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                    </div>
                    <div class="space-y-5 tk-dm-sans text-[#233] leading-7 max-w-prose">
                        <p>{!! $accountancy['hero']['intro_paragraph'] !!}</p>
                    </div>
                </div>
            </div>
            <div class="md:justify-self-end w-full lg:max-w-[690px] h-full md:max-h-[914px] overflow-hidden">
                <img src="{{ $accountancy['hero']['image'] }}" alt="" class="w-full h-full object-cover">
            </div>
        </div>
        @if (!empty($accountancy['cta_top_enabled']))
            <div class="absolute bottom-0 w-full min-h-[322px] hidden md:flex items-center"
                style="background-image: url('{{ $accountancy['background']['desktop'] }}'); background-size: cover; background-position: top; background-repeat: no-repeat;">
                <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-auto gap-10">
                    <img src="{{ $accountancy['background']['phone_icon'] }}" alt="Księgowa na fotelu"
                        class="static max-md:order-last md:absolute bottom-0 md:left-auto object-cover" />
                    <div>

                    </div>
                    <div class="flex flex-col gap-12">
                        <h2 class="tk-tt-travels-next text-4xl text-white max-w-[300px]">
                            {!! $accountancy['cta_top']['heading'] !!}</h2>
                        <a class="flex justify-center md:justify-start" href="#kontakt">
                            <svg class="max-w-8" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M297.4 598.6C309.9 611.1 330.2 611.1 342.7 598.6L470.7 470.6C483.2 458.1 483.2 437.8 470.7 425.3C458.2 412.8 437.9 412.8 425.4 425.3L352 498.7L352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 498.7L214.6 425.3C202.1 412.8 181.8 412.8 169.3 425.3C156.8 437.8 156.8 458.1 169.3 470.6L297.3 598.6z" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <p class="text-white">{!! $accountancy['cta_top']['paragraph'] !!}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        @if (!empty($accountancy['cta_top_enabled']))
            <div class="absolute bottom-0 max-w-screen min-h-[322px] flex md:hidden items-center"
                style="background-image: url('{{ $accountancy['background']['mobile'] }}'); background-repeat: no-repeat;">
                <div
                    class="grid md:grid-cols-3 min-h-full items-center justify-center mt-10 max-w-6xl mx-10 md:mx-auto gap-10">
                    <img src="{{ $accountancy['background']['phone_icon'] }}" alt="Księgowa na fotelu"
                        class="static max-md:order-last md:absolute bottom-0 object-cover" />
                    <div>

                    </div>
                    <div class="flex flex-col gap-12">
                        <h2
                            class="flex justify-center md:justify-start text-4xl text-center md:text-left text-white max-w-[300px] tk-tt-travels-next">
                            {!! $accountancy['cta_top']['heading'] !!}</h2>
                        <a class="justify-center md:justify-start hidden md:flex" href="#kontakt">
                            <svg class="max-w-8" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M297.4 598.6C309.9 611.1 330.2 611.1 342.7 598.6L470.7 470.6C483.2 458.1 483.2 437.8 470.7 425.3C458.2 412.8 437.9 412.8 425.4 425.3L352 498.7L352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 498.7L214.6 425.3C202.1 412.8 181.8 412.8 169.3 425.3C156.8 437.8 156.8 458.1 169.3 470.6L297.3 598.6z" />
                            </svg>
                        </a>
                    </div>
                    <div>
                        <p class="text-white  text-center">{!! $accountancy['cta_top']['paragraph'] !!}
                        </p>
                        <a class="justify-center md:justify-start flex md:hidden mt-10" href="#kontakt">
                            <svg class="max-w-10" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M297.4 598.6C309.9 611.1 330.2 611.1 342.7 598.6L470.7 470.6C483.2 458.1 483.2 437.8 470.7 425.3C458.2 412.8 437.9 412.8 425.4 425.3L352 498.7L352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 498.7L214.6 425.3C202.1 412.8 181.8 412.8 169.3 425.3C156.8 437.8 156.8 458.1 169.3 470.6L297.3 598.6z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </section>

    @if (!empty($accountancy['section_two']['title']) || !empty($accountancy['section_two']['paragraph']))
        <section class="bg-[#f3f5f7] relative min-h-[718px]">
            @php
                $mdPbBottomClass = !empty($accountancy['cta_bottom_enabled'])
                    ? ' pb-[700px] md:pb-64 lg:pb-40'
                    : 'pb-10 md:pb-0';
            @endphp
            <div
                class="max-w-6xl px-4 lg:px-0 flex flex-col md:flex-row min-w-full gap-8 lg:gap-24 items-center {{ $mdPbBottomClass }}">
                <div class="w-full order-last md:order-first lg:max-w-[690px] h-full lg:min-h-[718px] overflow-hidden">
                    <img src="{{ $accountancy['section_two']['image'] }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="mr-10 justify-self-start">
                    <h2 class="tk-tt-travels-next text-[#0b285f] text-3xl md:text-5xl leading-tight mt-0 md:mt-24">
                        {!! $accountancy['section_two']['title'] !!}
                    </h2>
                    <div class="flex gap-2 md:gap-10">
                        <div class="mt-8 flex items-start gap-1">
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                            </svg>
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                            </svg>
                        </div>
                        <div class="tk-dm-sans mt-6 space-y-5 text-[#233] leading-7 max-w-prose">
                            <p>{!! $accountancy['section_two']['paragraph'] !!}</p>
                            @php $bullets = $accountancy['section_two']['bullets']; @endphp
                            @if (!empty($bullets) && is_array($bullets))
                                <ul class="space-y-3">
                                    @foreach ($bullets as $b)
                                        <li class="flex items-center gap-3">

                                            <svg class="w-1.5 h-2" width="6" height="8" viewBox="0 0 6 8"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.25 3.89746L0 7.79457V0.000346661L5.25 3.89746Z"
                                                    fill="#38783A" />
                                            </svg>

                                            <span>{!! $b !!}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            <p class="pb-40">{!! $accountancy['section_two']['paragraph_2'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @if (!empty($accountancy['cta_bottom_enabled']))
                <div class="absolute bottom-0 w-full min-h-[322px] hidden md:flex items-center"
                    style="background-image: url('{{ $accountancy['background']['desktop'] }}'); background-size: cover; background-position: top; background-repeat: no-repeat;">
                    <div class="grid md:grid-cols-3 min-h-full items-center justify-center max-w-6xl mx-auto gap-10">
                        <img src="{{ $accountancy['background']['phone_icon'] }}" alt="Księgowa na fotelu"
                            class="static max-md:order-last md:absolute bottom-0 md:left-auto object-cover" />
                        <div>

                        </div>
                        <div class="flex flex-col gap-12">
                            <h2 class="tk-tt-travels-next text-4xl text-white max-w-[300px]">
                                {!! $accountancy['cta_bottom']['heading'] !!}</h2>
                            <a class="flex justify-center md:justify-start" href="#kontakt">
                                <svg class="max-w-12" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M297.4 598.6C309.9 611.1 330.2 611.1 342.7 598.6L470.7 470.6C483.2 458.1 483.2 437.8 470.7 425.3C458.2 412.8 437.9 412.8 425.4 425.3L352 498.7L352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 498.7L214.6 425.3C202.1 412.8 181.8 412.8 169.3 425.3C156.8 437.8 156.8 458.1 169.3 470.6L297.3 598.6z" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <p class="text-white text-center md:text-start">{!! $accountancy['cta_bottom']['paragraph'] !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Mobile background (visible on small screens) (bottom CTA) -->
            @if (!empty($accountancy['cta_bottom_enabled']))
                <div class="absolute bottom-0 max-w-screen min-h-[322px] flex md:hidden items-center"
                    style="background-image: url('{{ $accountancy['background']['mobile'] }}'); background-repeat: no-repeat;">
                    <div
                        class="grid md:grid-cols-3 min-h-full items-center justify-center mt-10 max-w-6xl mx-10 md:mx-auto gap-10">
                        <img src="{{ $accountancy['background']['phone_icon'] }}" alt="Księgowa na fotelu"
                            class="static max-md:order-last md:absolute bottom-0 object-cover" />
                        <div>

                        </div>
                        <div class="flex flex-col gap-12">
                            <h2 class="flex justify-center md:justify-start text-4xl text-center md:text-left text-white">
                                {!! $accountancy['cta_bottom']['heading'] !!}
                            </h2>
                            <a class="hidden md:flex justify-center md:justify-start" href="#kontakt">
                                <svg class="max-w-8" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M297.4 598.6C309.9 611.1 330.2 611.1 342.7 598.6L470.7 470.6C483.2 458.1 483.2 437.8 470.7 425.3C458.2 412.8 437.9 412.8 425.4 425.3L352 498.7L352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 498.7L214.6 425.3C202.1 412.8 181.8 412.8 169.3 425.3C156.8 437.8 156.8 458.1 169.3 470.6L297.3 598.6z" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <p class="text-white">{!! $accountancy['cta_bottom']['paragraph'] !!}
                            </p>
                            <a class="flex md:hidden mt-10 justify-center md:justify-start" href="#kontakt">
                                <svg class="max-w-10" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M297.4 598.6C309.9 611.1 330.2 611.1 342.7 598.6L470.7 470.6C483.2 458.1 483.2 437.8 470.7 425.3C458.2 412.8 437.9 412.8 425.4 425.3L352 498.7L352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 498.7L214.6 425.3C202.1 412.8 181.8 412.8 169.3 425.3C156.8 437.8 156.8 458.1 169.3 470.6L297.3 598.6z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </section>
    @endif

    <section id="kontakt" class="relative py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-1/2">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/businessman-working.png" alt=""
                class="w-full h-full object-cover opacity-70">
            <div class="absolute inset-0 bg-linear-to-b from-transparent to-white"></div>

        </div>

        <div class="relative max-w-4xl mx-auto px-4">
            <div class="text-center mb-10 md:mb-12">
                <h2 class="tk-tt-travels-next text-3xl md:text-5xl leading-tight text-[#0b285f]">
                    {!! $accountancy['contact']['heading'] !!}
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
    </section>
@endsection
