<footer class="w-full">

    <section class="bg-[#2d7e3b] text-white pt-12 pb-10">
        <div class="max-w-6xl mx-auto px-4 lg:px-0 grid gap-10 md:grid-cols-4 items-start">
            <div class="flex flex-col items-center md:items-start">
                <img src="{{ $footer['logo']['url'] }}" alt="{{ $footer['logo']['alt'] }}">
            </div>

            <div>
                <h4 class="font-semibold mb-4">{{ $footer['contact']['title'] }}</h4>
                <p>{!! $footer['contact']['address'] !!}</p>
                <p class="mt-4">
                    <a href="tel:{{ $footer['contact']['phone_url'] }}"
                        class="hover:underline">{{ $footer['contact']['phone'] }}</a><br>
                    <a href="mailto:{{ $footer['contact']['email'] }}"
                        class="hover:underline">{{ $footer['contact']['email'] }}</a>
                </p>
            </div>

            <div>
                <h4 class="font-semibold mb-4">{{ $footer['hours']['title'] }}</h4>
                <p>{!! $footer['hours']['content'] !!}</p>
            </div>

            <div>
                <h4 class="font-semibold mb-4">{{ $footer['services']['title'] }}</h4>
                <ul class="space-y-2">
                    @foreach ($footer['services']['links'] as $link)
                        <li><a href="{{ $link['url'] }}" class="hover:underline">{{ $link['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div
            class="max-w-6xl mx-auto px-4 lg:px-0 py-5 flex flex-col md:flex-row items-center justify-between gap-4 text-xs md:text-sm">
            <div class="text-center md:text-left order-last md:order-first">
                <p class="text-[#0b285f]">{!! $footer['bottom']['copyright'] !!}</p>
                <a href="{{ $footer['bottom']['privacy_url'] }}"
                    class="text-[#0b285f] hover:underline">{{ $footer['bottom']['privacy_label'] }}</a>
            </div>
            <div class="flex items-center gap-2">
                <img src="{{ $footer['bottom']['licensed_logo'] }}" alt="Licensed Accountant">
                <span class="text-[#00AB4E] text-xl justify-self-start">{!! $footer['bottom']['licensed_text'] !!}</span>
            </div>
        </div>
    </section>

</footer>
