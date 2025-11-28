{{--
  Template Name: Blog
--}}

@extends('layouts.app')

@section('content')
    <section class="bg-white pt-10 md:pt-14 pb-16">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">
            <div class="text-center">
                @php
                    $hero_title = $blog['title'] ?? 'Blog';
                    $hero_subtitle = $blog['subtitle'] ?? null;
                    $perPage = !empty($blog['posts_per_page']) ? (int) $blog['posts_per_page'] : 9;
                @endphp

                <h1 class="text-[#0b285f] text-3xl md:text-5xl font-bold tk-tt-travels-next">{{ $hero_title }}</h1>
                @if ($hero_subtitle)
                    <p class="mt-3 text-slate-600">{{ $hero_subtitle }}</p>
                @endif
                <div class="mt-3 flex items-center justify-center gap-1">

                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                    </svg>


                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                    </svg>

                </div>
            </div>

            <div class="mt-10 md:mt-12 grid gap-8 md:grid-cols-2 justify-center lg:justify-start lg:grid-cols-3">
                @php
                    $data = \App\View\Blog::recentPosts($perPage);
                    $posts = $data['posts'] ?? [];
                    $total_pages = $data['total'] ?? 1;
                    $paged = $data['paged'] ?? max(1, get_query_var('paged') ?: get_query_var('page') ?: 1);
                @endphp

                @foreach ($posts as $p)
                    @php
                        $img =
                            $p['thumbnail'] ?:
                            get_template_directory_uri() . '/resources/images/businesswoman-working.png';
                    @endphp
                    <a href="{{ $p['link'] }}"
                        class="group relative bg-[#F4F4F4] text-[#0b285f] rounded-md hover:shadow-2xl transition w-full max-w-[330px] md:max-w-full {{ $loop->index > 0 ? 'hidden md:block' : '' }}">
                        <div class="min-h-48 px-10 pt-8 pb-3 w-full overflow-hidden">
                            <img src="{{ $img }}" alt="{{ $p['title'] }}" class="w-full h-full object-contain" />
                        </div>
                        <div class="px-10 pb-8">
                            <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                                <svg class="w-4 h-4 text-[#0b285f]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.6">
                                    <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                    <path d="M16 2v4M8 2v4M3 10h18"></path>
                                </svg>
                                <span>{{ $p['date'] }}</span>
                            </div>
                            <h3
                                class="text-lg font-semibold leading-snug text-[#2d7e3b] group-hover:underline mb-3 line-clamp-3">
                                {{ $p['title'] }}</h3>
                            <p class="text-sm text-slate-600 line-clamp-2">{{ $p['excerpt'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            @if (!empty($total_pages) && $total_pages > 1)
                @php
                    $big = 999999999;
                    $links =
                        paginate_links([
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => get_option('permalink_structure') ? 'page/%#%/' : '&paged=%#%',
                            'current' => $paged,
                            'total' => $total_pages,
                            'prev_text' => '&lsaquo;',
                            'next_text' => '&rsaquo;',
                            'type' => 'array',
                        ]) ?:
                        [];
                @endphp

                @if (!empty($links))
                    <nav class="mt-10 flex justify-center">
                        <ul class="flex items-center gap-8">
                            @foreach ($links as $link)
                                @php
                                    $is_current = str_contains($link, 'page-numbers current');
                                @endphp
                                <li>
                                    @if ($is_current)
                                        <span
                                            class="inline-flex items-center justify-center text-xs hover:cursor-pointer font-semibold">{{ strip_tags($link) }}</span>
                                    @else
                                        @php
                                            $styled = preg_replace(
                                                '/<a /',
                                                '<a class="inline-flex items-center justify-center text-[#D1D1D1] hover:text-gray-900 text-xs hover:cursor-pointer" ',
                                                $link,
                                                1,
                                            );
                                        @endphp
                                        {!! $styled !!}
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                @endif
            @endif
        </div>
    </section>
@endsection
