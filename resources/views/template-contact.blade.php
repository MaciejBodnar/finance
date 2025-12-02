{{--
  Template Name: Contact Page
--}}

@extends('layouts.app')

@section('content')
    <section id="kontakt" class="relative py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-1/2">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/businessman-working.png" alt=""
                class="w-full h-full object-cover opacity-70">
            <div class="absolute inset-0 bg-linear-to-b from-transparent to-white"></div>

        </div>

        <div class="relative max-w-4xl mx-auto px-4">
            <div class="text-center">
                <h2 class="tk-tt-travels-next font-bold text-3xl md:text-5xl">{!! $contact['page']['title'] !!}</h2>
                <div class="mt-12 flex items-center justify-center gap-1">

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
            <div class="grid grid-cols-1 md:grid-cols-4 justify-between gap-8 text-[#0b285f]">
                <div class="col-span-3">
                    <h3 class="font-semibold mb-3">{{ $contact['sections']['contact_heading'] }}</h3>
                    <div class="flex flex-col md:flex-row gap-6 md:gap-20">
                        <div class="text-[#233]">{!! $contact['company']['addr'] !!}</div>
                        <div class="text-[#233]"><span
                                class="hover:underline">{{ $contact['company']['phone'] }}</span><br><span
                                class="hover:underline">{{ $contact['company']['email'] }}</span></div>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold mb-3">{{ $contact['sections']['hours_heading'] }}</h3>
                    <div class="text-[#233] text-[15px]">
                        @foreach ($contact['company']['hours'] as $line)
                            <div>{{ $line }}</div>
                        @endforeach
                    </div>
                </div>
            </div>


            <hr class="my-10 border-t-2 border-[#0b285f]/30">

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
