{{--
  Template Name: Single Post (Skeleton)
--}}

@extends('layouts.app')

@section('content')
    <section class="bg-white py-10 md:py-14">
        <div class="max-w-6xl mx-auto px-4 lg:px-0 grid lg:grid-cols-[1.1fr,0.9fr] gap-10 lg:gap-16 items-start">

            <article class="prose max-w-none">
                <header class="mb-6">
                    <h1 class="text-[#0b285f] text-3xl md:text-5xl font-extrabold leading-tight">{{ $post['title'] ?? '' }}
                    </h1>
                    @if (!empty($post['hero_subtitle']))
                        <p class="mt-2 text-slate-600">{{ $post['hero_subtitle'] }}</p>
                    @endif
                    <div class="mt-4 flex items-center gap-1">
                        <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                        <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                    </div>
                </header>

                <div class="space-y-6 text-[#142033] leading-7">
                    {!! $post['content'] ?? '' !!}
                </div>
            </article>

            <aside class="space-y-8">
                <div class="w-full h-72 md:h-[24rem] rounded-md overflow-hidden">
                    <img src="{{ $post['thumbnail'] ?? get_template_directory_uri() . '/assets/img/default.jpg' }}"
                        alt="" class="w-full h-full object-cover">
                </div>

                @if (!empty($previous))
                    <div>
                        <h3 class="text-[#0b285f] text-xl font-extrabold mb-4">Previous Post</h3>
                        <a href="{{ $previous['link'] }}"
                            class="group block bg-white rounded-md shadow-md hover:shadow-lg transition overflow-hidden">
                            <div class="h-36 w-full overflow-hidden">
                                <img src="{{ $previous['thumbnail'] ?? get_template_directory_uri() . '/assets/img/default.jpg' }}"
                                    alt="" class="w-full h-full object-cover group-hover:scale-[1.02] transition">
                            </div>
                            <div class="p-5">
                                <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                                    <svg class="w-4 h-4 text-[#0b285f]" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.6">
                                        <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                        <path d="M16 2v4M8 2v4M3 10h18"></path>
                                    </svg>
                                    <span>{{ $previous['date'] ?? '' }}</span>
                                </div>
                                <h4 class="text-base font-semibold leading-snug text-[#2d7e3b] group-hover:underline">
                                    {{ $previous['title'] ?? '' }}</h4>
                            </div>
                        </a>
                    </div>
                @endif
            </aside>

        </div>
    </section>
@endsection
