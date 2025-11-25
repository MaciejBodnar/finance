@php
    $make_url = function (string $slug, string $fallback = null) {
        if ($slug === 'home') {
            return function_exists('pll_home_url') ? pll_home_url() : home_url('/');
        }

        $page = get_page_by_path($slug);
        if ($page) {
            return get_permalink($page->ID);
        }

        return $fallback ?? site_url("/{$slug}");
    };

    $get_title = function (string $slug) use ($make_url) {
        if ($slug === 'home') {
            return function_exists('pll_current_language') && pll_current_language() === 'en'
                ? 'HOME'
                : 'STRONA GŁÓWNA';
        }

        $url = $make_url($slug);
        $id = url_to_postid($url);
        if ($id > 0) {
            $p = get_post($id);
            if ($p && !empty($p->post_title)) {
                return strtoupper($p->post_title);
            }
        }

        $page = get_page_by_path($slug);
        if ($page && !empty($page->post_title)) {
            return strtoupper($page->post_title);
        }

        return strtoupper($slug);
    };

    $items = [
        ['slug' => 'home', 'label' => $get_title('home'), 'href' => $make_url('home')],
        ['slug' => 'about', 'label' => $get_title('about'), 'href' => $make_url('about')],
        ['slug' => 'blog', 'label' => $get_title('blog'), 'href' => $make_url('blog')],
        ['slug' => 'contact', 'label' => $get_title('contact'), 'href' => $make_url('contact')],
        ['slug' => 'accountancy', 'label' => $get_title('accountancy'), 'href' => $make_url('accountancy')],
    ];
@endphp

<nav class="flex flex-col">
    <div class="w-full max-w-lg px-6">
        <ul class="flex flex-col gap-4">
            @foreach ($items as $it)
                @if (isset($it['slug']) && $it['slug'] === 'accountancy')
                    <li>
                        <button type="button"
                            class="mobile-submenu-toggle w-full items-center flex justify-between px-4 pt-3 rounded-lg text-left text-2xl font-semibold uppercase text-whitetransition"
                            aria-expanded="false" data-target="ksiegowosc-submenu">
                            <span class="truncate">{{ $it['label'] }}</span>
                            <svg class="w-5 h-5 transition-transform" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div id="ksiegowosc-submenu" class="mt-3 px-4 hidden text-white">
                            <ul class="space-y-2 pb-6 text-base">
                                <li><a href="{{ $make_url('firmy-ltd') }}"
                                        class="block hover:text-white/80 text-xl py-2">Firmy
                                        LTD</a></li>
                                <li><a href="{{ $make_url('wlasna-dzialalnosc') }}"
                                        class="block hover:text-white/80 text-xl py-2">Własna działalność</a>
                                </li>
                                <li><a href="{{ $make_url('spolki-cywilne') }}"
                                        class="block hover:text-white/80 text-xl py-2">Spółki
                                        cywilne</a>
                                </li>
                                <li><a href="{{ $make_url('dodatkowe-uslugi') }}"
                                        class="block hover:text-white/80 text-xl py-2">Dodatkowe usługi</a>
                                </li>
                                <li><a href="{{ $make_url('wirtualne-biuro') }}"
                                        class="block hover:text-white/80 text-xl py-2">Wirtualne biuro</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li>
                        <a href="{{ $it['href'] }}"
                            class="block w-full px-4 py-3 bg-transparent text-2xl font-semibold uppercase text-white hover:text-[#ffba6a] transition rounded-lg">{{ $it['label'] }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

    {{-- <div class="pt-10">
        <?php if (function_exists('pll_the_languages')) : ?>
        <div class="flex justify-center gap-3 mb-4">
            <?php pll_the_languages(['show_flags' => 0, 'show_names' => 1, 'hide_if_empty' => 0]); ?>
        </div>
        <?php else : ?>
        <div class="flex justify-center gap-3 mb-4">
            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="text-xs font-semibold px-3 py-2 border rounded text-white border-white/20 hover:border-[#ffba6a] hover:text-[#ffba6a]">PL</a>
            <a href="<?php echo esc_url(home_url('/en/')); ?>"
                class="text-xs font-semibold px-3 py-2 border rounded text-white border-white/20 hover:border-[#ffba6a] hover:text-[#ffba6a]">EN</a>
        </div>
        <?php endif; ?>
    </div> --}}
</nav>
