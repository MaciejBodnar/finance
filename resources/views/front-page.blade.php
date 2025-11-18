{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')
    <section class="bg-[#122457]">
        <div class="relative">
            <div class="relative min-h-[830px] max-w-6xl mx-auto px-4 lg:px-0 grid lg:grid-cols-2">
                <div class="space-y-8 pt-20">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl text-[#ffc23a]">
                        Twój partner<br />
                        w Księgowości<br />
                        i Podatkach
                    </h1>
                    <p class="text-sm md:text-base leading-relaxed text-[#f5f7ff]">
                        Profesjonalną obsługą naszych klientów, niezależnie od wielkości i
                        złożoności usług księgowej, zajmują się certyfikowani księgowi z
                        kilkuletnim doświadczeniem z kwalifikacjami zdobytymi w Wielkiej
                        Brytanii.
                    </p>
                </div>

                <img src="{{ get_template_directory_uri() }}/resources/images/test.png" alt="Księgowa na fotelu"
                    class="object-cover" />


            </div>
            <div class="absolute bottom-0 w-full min-h-[322px] flex items-center"
                style="background-image: url('{{ get_template_directory_uri() }}/resources/images/Subtraction.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="grid grid-cols-3 min-h-full justify-center max-w-6xl mx-auto gap-10">
                    <img src="{{ get_template_directory_uri() }}/resources/images/telefon.png" alt="Księgowa na fotelu"
                        class="absolute bottom-0 left-40 object-cover" />
                    <div>

                    </div>
                    <div class="flex flex-col gap-12">
                        <h2 class="text-4xl text-white">Umów się na spotkanie</h2>
                        <a
                            class="w-fit hover:cursor-pointer border-2 border-black py-2 px-12 bg-[#122457] text-white uppercase">Umów
                            się</a>
                    </div>
                    <div>
                        <p class="text-white">Nasi księgowi w Hanwell są cały czas do Twojej dyspozycji – zadzwoń albo
                            napisz,
                            by umówić się na spotkanie.<br />
                            <strong>Zajmiemy się Twoją sprawą w sposób rzetelny i kompleksowy! </strong>
                        </p>
                    </div>
                </div>
            </div>

    </section>
    <section id="uslugi" class="bg-white py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">

            <div class="grid lg:grid-cols-[1fr,1.6fr] gap-10 lg:gap-16 items-start">
                <h2 class="text-[#0b285f] text-3xl md:text-5xl font-bold leading-tight">
                    W czym możemy<br />Ci pomóc?
                </h2>

                <div class="space-y-5 text-[#233] text-sm md:text-base leading-relaxed">
                    <div class="flex items-start gap-3">
                        <div class="pt-1 flex gap-1">
                            <svg class="w-3 h-3 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5 8l7 8 7-8z" />
                            </svg>
                            <svg class="w-3 h-3 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5 8l7 8 7-8z" />
                            </svg>
                        </div>
                        <p>
                            Wspieramy klientów prywatnych, a także przedsiębiorstwa oraz instytucje. Z naszych usług
                            księgowych w Ealing mogą skorzystać zarówno małe firmy (Self–Employed i Partnership), jak i
                            średnie oraz duże spółki (Limited Companies). Dzięki zatrudnianiu wykwalifikowanych i
                            doświadczonych pracowników o różnych specjalizacjach możemy pomagać kompleksowo — również w
                            kwestiach związanych z podatkami, sprawami formalnymi, kredytami czy też zakładaniem lub
                            zamykaniem działalności.
                        </p>
                    </div>

                    <p>
                        Świadczymy usługi księgowe w całej Wielkiej Brytanii, zapewniając indywidualne podejście oraz
                        profesjonalizm. Nasze biuro księgowe realizując zlecenia dla naszych klientów, działa z pełnym
                        zaangażowaniem i sumiennie wykonujemy wszelkie zadania — tak, abyś osiągał swoje cele i mógł skupić
                        się na rozwoju własnej działalności.
                    </p>

                    <p>
                        Sprawdź, czym zajmuje się nasze biuro księgowe i skorzystaj z usług, świadczonych na najwyższym
                        poziomie!
                    </p>
                </div>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-5">
                <?php
        $items = [
          ['label' => 'Firmy<br/>LTD', 'href' => '#ltd', 'icon' => 'building'],
          ['label' => 'Własna<br/>działalność', 'href' => '#self', 'icon' => 'desk'],
          ['label' => 'Spółki<br/>cywilne', 'href' => '#civil', 'icon' => 'network'],
          ['label' => 'Dodatkowe<br/>usługi', 'href' => '#extra', 'icon' => 'docs'],
          ['label' => 'Wirtualne<br/>biuro', 'href' => '#virtual', 'icon' => 'office'],
        ];

        function icon_svg($name) {
          switch ($name) {
            case 'building':
              return '<svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="4" y="3" width="12" height="16" rx="1.5" />
                        <path d="M8 7h4M8 10h4M8 13h4" />
                        <path d="M18 9v12M15 21h6" />
                      </svg>';
            case 'desk':
              return '<svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="12" width="18" height="5" rx="1"/>
                        <path d="M7 7h10v5H7zM7 17v4M17 17v4" />
                      </svg>';
            case 'network':
              return '<svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="7" r="3"/>
                        <circle cx="6" cy="17" r="3"/>
                        <circle cx="18" cy="17" r="3"/>
                        <path d="M10 9l-3 6M14 9l3 6" />
                      </svg>';
            case 'docs':
              return '<svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M7 3h7l4 4v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/>
                        <path d="M14 3v4h4M8 11h8M8 15h8" />
                      </svg>';
            case 'office':
              return '<svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M4 20V6a2 2 0 0 1 2-2h6v16H4z"/>
                        <path d="M12 6h6a2 2 0 0 1 2 2v12h-8"/>
                        <path d="M7 9h3M7 12h3M7 15h3M15 10h3M15 13h3M15 16h3" />
                      </svg>';
          }
        }

        foreach ($items as $it):
      ?>
                <a href="<?php echo $it['href']; ?>"
                    class="group relative bg-[#2d7e3b] text-white rounded-sm p-6 min-h-[200px] flex flex-col justify-between focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2d7e3b] focus:ring-offset-white hover:brightness-110 transition">
                    <div class="text-white/95">
                        <div class="text-white mb-6">
                            <?php echo icon_svg($it['icon']); ?>
                        </div>
                        <div class="text-lg font-medium leading-snug" aria-hidden="true">
                            <?php echo $it['label']; ?>
                        </div>
                    </div>

                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-white transition-transform group-hover:translate-y-0.5" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path d="M5 8l7 8 7-8z" />
                        </svg>
                    </div>

                    <span class="absolute inset-0" aria-hidden="true"></span>
                </a>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <section id="blog" class="relative bg-[#c9936d] text-white py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-[88%]">
            <svg class="w-full h-full" viewBox="0 0 1440 700" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0 0H1440V520C1200 465 960 440 720 440C480 440 240 465 0 520Z" fill="#0b285f" />
            </svg>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 lg:px-0">
            <div class="text-center">
                <h2 class="text-3xl md:text-5xl font-bold">Blog</h2>
                <div class="mt-3 flex items-center justify-center gap-1">
                    <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 8l7 8 7-8z" />
                    </svg>
                    <svg class="w-4 h-4 text-[#2d7e3b]" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 8l7 8 7-8z" />
                    </svg>
                </div>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-3">
                <a href="/post/uproczona-ksiegowosc"
                    class="group relative bg-white text-[#0b285f] rounded-md shadow-xl hover:shadow-2xl transition">
                    <div class="absolute inset-y-0 left-0 w-3.5 bg-[#0b285f]"></div>
                    <div class="h-48 w-full overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-1.jpg" alt=""
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                            <svg class="w-4 h-4 text-[#0b285f]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6">
                                <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                <path d="M16 2v4M8 2v4M3 10h18"></path>
                            </svg>
                            <span>wrzesień 15, 2025</span>
                        </div>
                        <h3 class="text-lg font-semibold leading-snug text-[#2d7e3b] group-hover:underline mb-3">Uproszczona
                            księgowość: praktyczne wskazówki dla właścicieli firm</h3>
                        <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam
                            nonumy eirmod.</p>
                    </div>
                    <span class="absolute inset-0" aria-hidden="true"></span>
                </a>

                <a href="/post/od-chaosu-do-porzadku"
                    class="group relative bg-white text-[#0b285f] rounded-md shadow-xl hover:shadow-2xl transition">
                    <div class="absolute inset-y-0 left-0 w-3.5 bg-[#0b285f]"></div>
                    <div class="h-48 w-full overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-2.jpg" alt=""
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                            <svg class="w-4 h-4 text-[#0b285f]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6">
                                <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                <path d="M16 2v4M8 2v4M3 10h18"></path>
                            </svg>
                            <span>wrzesień 15, 2025</span>
                        </div>
                        <h3 class="text-lg font-semibold leading-snug text-[#2d7e3b] group-hover:underline mb-3">Od chaosu
                            do porządku: jak dobra księgowość wspiera rozwój biznesu</h3>
                        <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam
                            nonumy eirmod.</p>
                    </div>
                    <span class="absolute inset-0" aria-hidden="true"></span>
                </a>

                <a href="/post/wskazowki-dla-wlascicieli"
                    class="group relative bg-white text-[#0b285f] rounded-md shadow-xl hover:shadow-2xl transition">
                    <div class="absolute inset-y-0 left-0 w-3.5 bg-[#0b285f]"></div>
                    <div class="h-48 w-full overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-3.jpg" alt=""
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                            <svg class="w-4 h-4 text-[#0b285f]" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6">
                                <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                <path d="M16 2v4M8 2v4M3 10h18"></path>
                            </svg>
                            <span>wrzesień 15, 2025</span>
                        </div>
                        <h3 class="text-lg font-semibold leading-snug text-[#2d7e3b] group-hover:underline mb-3">
                            Uproszczona księgowość: praktyczne wskazówki dla właścicieli firm</h3>
                        <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam
                            nonumy eirmod.</p>
                    </div>
                    <span class="absolute inset-0" aria-hidden="true"></span>
                </a>
            </div>

            <div class="mt-10 text-center">
                <a href="/blog"
                    class="inline-flex items-center justify-center px-8 py-3 bg-[#0b285f] text-white font-semibold rounded-md hover:bg-[#0a214f] transition">CZYTAJ
                    WIĘCEJ</a>
            </div>
        </div>
    </section>
@endsection
