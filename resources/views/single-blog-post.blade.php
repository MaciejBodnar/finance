{{--
  Template Name: Single Post
--}}

@extends('layouts.app')

@section('content')
    <section class="bg-white">
        <div class="max-w-6xl px-4 lg:px-0 flex flex-col md:flex-row min-w-full justify-between gap-10 lg:gap-16">

            <article class="prose ml-0 md:ml-64 mt-10 my-0 md:my-28 max-w-6xl">
                <header class="mb-8">
                    <h1 class="tk-tt-travels-next text-[#0b285f] mb-8 md:mb-40 text-3xl md:text-5xl leading-tight">
                        {!! $post['title'] !!} {!! $post['title_2'] !!}
                    </h1>
                    <div class="mt-4 flex items-center gap-1">

                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>

                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>

                    </div>
                </header>

                <div class="space-y-6 text-[#142033] leading-7">
                    {!! $post['content'] ?? '' !!}
                </div>
            </article>

            <aside class="space-y-8">
                <div class="w-full items-start md:max-h-[624px] md:min-w-[756px] rounded-md overflow-hidden">
                    <img src="{{ $post['image'] ?: $post['thumbnail'] }}" alt=""
                        class="w-full h-full object-contain">
                </div>

                @if (!empty($previous))
                    <div class="w-full md:w-[350px]">
                        <h3 class="tk-tt-travels-next text-[#0b285f] text-xl font-extrabold mb-4">{!! $post['previous_post'] !!}
                        </h3>
                        <div class="bg-[#F4F4F4]! mb-24">
                            <a href="{{ $previous['link'] }}"
                                class="group relative bg-[#F4F4F4] text-[#0b285f] rounded-md hover:shadow-2xl transition w-full max-w-[330px] md:max-w-full">
                                <div class="min-h-48 px-10 pt-8 pb-3 w-full overflow-hidden">
                                    <img src="{{ $previous['thumbnail'] ?: get_template_directory_uri() . '/resources/images/businesswoman-working.png' }}"
                                        alt="{{ $previous['title'] }}" class="w-full h-full object-contain" />
                                </div>
                                <div class="px-10 pb-8">
                                    <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                                        <svg class="w-4 h-4 text-[#0b285f]" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.6">
                                            <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                            <path d="M16 2v4M8 2v4M3 10h18"></path>
                                        </svg>
                                        <span>{{ $previous['date'] }}</span>
                                    </div>
                                    <h3
                                        class="text-lg font-semibold leading-snug text-[#2d7e3b] group-hover:underline mb-3 line-clamp-3">
                                        {{ $previous['title'] }}</h3>
                                    <p class="text-sm text-slate-600 line-clamp-2">{{ $previous['excerpt'] }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            </aside>

        </div>
    </section>
@endsection
