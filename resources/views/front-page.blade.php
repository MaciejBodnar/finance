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
            <div class="absolute bottom-0 w-full min-h-[322px]"
                style="background-image: url('{{ get_template_directory_uri() }}/resources/images/Subtraction.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="grid grid-cols-3 py-24 max-w-6xl mx-auto gap-10">
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
@endsection
