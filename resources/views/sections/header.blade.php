<header class="w-full relative">

    <div class="bg-[#2d7e3b] text-white">
        <div class="max-w-6xl mx-auto flex items-center justify-center md:justify-between py-3 px-4 lg:px-0 text-sm">
            <a href="{{ $header['logo']['url'] }}" class="flex items-center gap-3">
                <img src="{{ $header['logo']['image'] }}" alt="Optimum Tax" class="w-10 h-12 object-contain" />
                <span class="text-lg font-semibold tracking-wide">
                    {{ $header['logo']['title'] }}
                </span>
            </a>

            <div class="flex items-center gap-8">

                <div class="hidden md:flex items-center gap-2">
                    <span class="opacity-80">{{ $header['logo']['phone_us'] }}</span>
                    {{ $header['logo']['phone_no'] }}
                </div>

                <div class="items-center gap-6 text-xs hidden md:flex">
                    @if (!empty($header['languages']))
                        @foreach ($header['languages'] as $lang)
                            <a href="{{ $lang['url'] }}"
                                class="flex items-center gap-2 hover:cursor-pointer {{ $lang['current_lang'] ? 'opacity-100' : 'opacity-50 hover:opacity-100 transition-opacity' }}">
                                <img src="{{ $lang['flag_url'] }}" width="22" alt="{{ $lang['name'] }}" />
                                <span class="font-semibold">{{ strtoupper($lang['slug']) }}</span>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    <nav class="bg-[#122457] text-white">
        <div class="max-w-6xl mx-auto px-4 lg:px-0 py-6">
            <div class="flex items-center justify-center md:justify-between">

                <ul class="hidden md:flex items-center gap-8 text-sm">
                    @foreach ($header['menu'] as $item)
                        <li class="{{ !empty($item['has_dropdown']) ? 'relative' : '' }}">
                            @if (!empty($item['has_dropdown']))
                                <button id="{{ $item['id'] ?? 'dropdown-link' }}" type="button" aria-expanded="false"
                                    class="hover:text-[#ffba6a] transition inline-flex items-center gap-1 text-sm {{ !empty($item['active']) ? 'text-[#ffba6a] font-semibold' : '' }}">
                                    {{ $item['title'] }}
                                    <span class="ml-1 text-[10px]">▾</span>
                                </button>
                            @else
                                <a href="{{ $item['url'] }}"
                                    class="hover:text-[#ffba6a] transition {{ !empty($item['active']) ? 'text-[#ffba6a] font-semibold' : '' }}">
                                    {{ $item['title'] }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>

                <button id="mobile-menu-toggle"
                    class="lg:hidden flex flex-col justify-center items-center w-8 h-8 space-y-1">
                    <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
                    <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
                    <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile full-screen overlay menu (hidden on md and up) -->
    <div id="mobile-menu" class="md:hidden hidden fixed inset-0 z-50 bg-[#0b285f] text-white overflow-auto">
        <div class="relative min-h-full">
            <div class="max-w-3xl mx-auto px-6 py-10">
                <div class="flex items-center justify-between mb-8">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/logo-desktop.png" alt="Optimum Tax"
                            class="w-10 h-12 object-contain" />
                        <span class="text-lg font-semibold tracking-wide">Optimum Tax</span>
                    </a>

                    <button id="mobile-menu-close" aria-label="Zamknij menu" class="p-2 rounded border border-white/20">
                        <span class="sr-only">Zamknij</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mobile-nav-wrapper">
                    @include('partials.mobile-nav')
                </div>
            </div>
        </div>
    </div>

    <div id="ksiegowosc-panel" class="hidden absolute left-0 right-0 top-full z-50">
        <div class="bg-white text-[#0b285f] shadow-lg">
            <div class="max-w-6xl mx-auto px-4 lg:px-0 py-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach (['column_1', 'column_2', 'column_3'] as $col)
                        @if (!empty($header['services'][$col]))
                            <div>
                                <h4 class="font-semibold mb-3">{{ $header['services'][$col]['title'] }}</h4>
                                @if (!empty($header['services'][$col]['links']))
                                    <ul class="space-y-2 text-sm">
                                        @foreach ($header['services'][$col]['links'] as $link)
                                            <li><a href="{{ $link['url'] }}"
                                                    class="hover:underline">{{ $link['title'] }}</a></li>
                                        @endforeach
                                    </ul>
                                @elseif(!empty($header['services'][$col]['content']))
                                    <p class="text-sm">{!! $header['services'][$col]['content'] !!}</p>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</header>
