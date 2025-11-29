{{--
  Template Name: Partners Page
--}}

@extends('layouts.app')

@section('content')
    <section class="bg-white py-12 md:pt-24 md:pb-32">
        <div class="max-w-6xl mx-auto px-4 lg:px-0">

            <div class="max-w-4xl">
                <h1 class="text-[#0b285f] text-3xl md:text-5xl font-bold tk-tt-travels-next">{!! $partner['hero']['title_html'] !!}</h1>
                <div class="mt-6 flex items-start gap-3">
                    <div class="pt-1 flex gap-1">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                        </svg>
                    </div>
                    <p class="text-[#233] leading-7">{!! $partner['hero']['intro_paragraph'] !!}</p>
                </div>
            </div>

            <div class="mt-24 grid lg:grid-cols-2 gap-8 lg:gap-14 items-start">
                <div>
                    <h2 class="text-[#0b285f] tk-tt-travels-next text-2xl md:text-3xl font-extrabold leading-tight">
                        {!! $partner['section']['title_html'] !!}
                    </h2>

                    <div class="mt-6 flex items-start gap-3">
                        <div class="pt-1 flex gap-1">

                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                            </svg>
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.66016 12.75L-9.91821e-05 0H17.3204L8.66016 12.75Z" fill="#38783A" />
                            </svg>

                        </div>
                        <div class="space-y-4 text-[#233] leading-7">
                            <p>{!! $partner['section']['intro_paragraph'] !!}</p>
                            @php $bullets = $partner['section']['bullets']; @endphp
                            @if (!empty($bullets) && is_array($bullets))
                                <ul class="space-y-3">
                                    @foreach ($bullets as $b)
                                        <li class="flex items-center gap-3">

                                            <svg width="6" height="8" viewBox="0 0 6 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.25 3.89746L0 7.79457V0.000346661L5.25 3.89746Z"
                                                    fill="#38783A" />
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
            <div class="mt-12 md:mt-24 space-y-6">
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
    <section id="kontakt" class="relative py-16 md:py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-1/2">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/businessman-working.png" alt=""
                class="w-full h-full object-cover opacity-70">
        </div>

        <div class="relative max-w-4xl mx-auto px-4">
            <div class="text-center mb-10 md:mb-12">
                <h2 class="text-3xl md:text-5xl font-extrabold leading-tight text-[#0b285f] tk-tt-travels-next">Postaw na
                    <br>
                    pewność i spokój,
                </h2>
                <p class="text-2xl md:text-4xl leading-tight text-[#6f7ea6] -mt-1 tk-tt-travels-next">powierz księgowość
                    <br>ekspertom
                </p>
            </div>

            <form action="#" method="post" class="space-y-5 text-sm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block mb-1 text-[#0b285f]">Imię</label>
                        <input type="text"
                            class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    </div>
                    <div>
                        <label class="block mb-1 text-[#0b285f]">Nazwisko</label>
                        <input type="text"
                            class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block mb-1 text-[#0b285f]">Email</label>
                        <input type="email"
                            class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    </div>
                    <div>
                        <label class="block mb-1 text-[#0b285f]">Numer Kontaktowy</label>
                        <input type="text"
                            class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    </div>
                </div>

                <div>
                    <label class="block mb-1 text-[#0b285f]">Temat</label>
                    <input type="text"
                        class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                </div>

                <div>
                    <label class="block mb-1 text-[#0b285f]">Wiadomość</label>
                    <textarea rows="6"
                        class="w-full border-2 border-[#0b285f] rounded-none px-3 py-2 resize-y focus:outline-none focus:ring-2 focus:ring-[#0b285f]"></textarea>
                </div>

                <div class="flex items-start gap-3">
                    <input type="checkbox"
                        class="mt-1 w-4 h-4 border-2 border-[#0b285f] rounded-none focus:outline-none focus:ring-2 focus:ring-[#0b285f]">
                    <p class="text-[12px] leading-relaxed text-[#3b445b]">Niniejszym oświadczam, że zapoznałem się z
                        polityką prywatności i wyrażam zgodę na przetwarzanie przez Optimum Tax LTD z siedzibą przy 86
                        Boston Road, London W7 3TR moich danych osobowych w zakresie niezbędnym do realizacji świadczonych
                        usług na moją rzecz. Jednocześnie potwierdzam, że mam ukończone 16 lat i jestem świadomy, że
                        przysługuje mi prawo do wglądu w moje dane osobowe oraz prawo do udzielenia zgody i żądania
                        usunięcia moich danych osobowych.</p>
                </div>

                <div class="pt-2 text-center">
                    <button type="submit"
                        class="inline-flex items-center justify-center px-8 py-3 bg-[#0b285f] text-white font-semibold tracking-wide rounded-none hover:bg-[#0a234f] transition">KONTAKT</button>
                </div>
            </form>
        </div>
    </section>
@endsection
