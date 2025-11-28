<nav class="flex flex-col">
    <div class="w-full max-w-lg px-6">
        <ul class="flex flex-col gap-4">
            @foreach ($header['menu'] as $item)
                @if (!empty($item['has_dropdown']))
                    <li>
                        <button type="button"
                            class="mobile-submenu-toggle w-full items-center flex justify-between px-4 py-3 rounded-lg text-left text-2xl font-semibold uppercase text-white transition"
                            aria-expanded="false" data-target="ksiegowosc-submenu">
                            <span class="truncate">{{ $item['title'] }}</span>
                            <svg class="w-5 h-5 transition-transform" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div id="ksiegowosc-submenu" class="mt-3 px-4 hidden text-white">
                            <ul class="space-y-2 pb-6 text-base">
                                @foreach (['column_1', 'column_2'] as $col)
                                    @if (!empty($header['services'][$col]['links']))
                                        @foreach ($header['services'][$col]['links'] as $link)
                                            <li>
                                                <a href="{{ $link['url'] }}"
                                                    class="block hover:text-white/80 text-xl py-2">
                                                    {{ $link['title'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @else
                    <li>
                        <a href="{{ $item['url'] }}"
                            class="block w-full px-4 py-3 bg-transparent text-2xl font-semibold uppercase text-white hover:text-[#ffba6a] transition rounded-lg {{ !empty($item['active']) ? 'text-[#ffba6a]' : '' }}">
                            {{ $item['title'] }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

    <div class="pt-10 px-6">
        @if (!empty($header['languages']))
            <div class="flex justify-center gap-4 mb-4">
                @foreach ($header['languages'] as $lang)
                    <a href="{{ $lang['url'] }}"
                        class="flex items-center gap-2 px-3 py-2 border rounded border-white/20 hover:border-[#ffba6a] hover:text-[#ffba6a] transition {{ $lang['current_lang'] ? 'bg-white/10 border-[#ffba6a] text-[#ffba6a] opacity-100' : 'text-white opacity-50 hover:opacity-100' }}">
                        <img src="{{ $lang['flag_url'] }}" width="20" alt="{{ $lang['name'] }}" />
                        <span class="text-sm font-semibold">{{ strtoupper($lang['slug']) }}</span>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</nav>
