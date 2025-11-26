{{--
  Template Name: Partners Page
--}}

@extends('layouts.app')

@section('content')
    <section class="bg-white py-12 md:py-16">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">

            <div class="max-w-4xl">
                <h1 class="text-[#0b285f] text-3xl md:text-5xl font-extrabold">{!! $partner['hero']['title_html'] !!}</h1>
                <div class="mt-6 flex items-start gap-3">
                    <div class="pt-1 flex gap-1">
                        <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                        <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                    </div>
                    <p class="text-[#233] leading-7">{!! $partner['hero']['intro_paragraph'] !!}</p>
                </div>
            </div>

            <div class="mt-10 grid lg:grid-cols-2 gap-8 lg:gap-14 items-start">
                <div>
                    <h2 class="text-[#0b285f] text-2xl md:text-4xl font-extrabold leading-tight">
                        {!! $partner['section']['title_html'] !!}
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
                        <div class="space-y-4 text-[#233] leading-7">
                            <p>{!! $partner['section']['intro_paragraph'] !!}</p>
                            @php $bullets = $partner['section']['bullets']; @endphp
                            @if (!empty($bullets) && is_array($bullets))
                                <ul class="space-y-3">
                                    @foreach ($bullets as $b)
                                        <li class="flex items-start gap-3">
                                            <svg class="mt-1 w-3.5 h-3.5 text-[#2d7e3b]" viewBox="0 0 24 24"
                                                fill="currentColor">
                                                <path d="M5 8l7 8 7-8z" />
                                            </svg>
                                            <span>{!! $b !!}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="w-full overflow-hidden">
                    <img src="{{ $partner['right_image'] }}" alt="" class="w-full h-full object-cover">
                </div>
            </div>
            <p class="mt-10">{!! $partner['closing_paragraph'] !!}</p>
            <div class="mt-12 space-y-6">
                @php $partnerBlocks = $partner['partners']; @endphp
                @if (!empty($partnerBlocks) && is_array($partnerBlocks))
                    @foreach ($partnerBlocks as $p)
                        <div class="border border-slate-700 p-6 md:p-8">
                            <div class="grid md:grid-cols-[220px_1fr] gap-6 items-center">
                                <div class="flex items-center justify-center h-full w-full">
                                    <img src="{{ $p['logo'] }}" alt="{{ $p['alt'] }}"
                                        class="h-full w-full object-cover">
                                </div>
                                <div class="space-y-4 text-[#233] leading-7 border-l-2 pl-6">
                                    <p>{!! $p['description'] !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section>
@endsection
