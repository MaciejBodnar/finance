<footer class="w-full">

    <section class="bg-[#2d7e3b] text-white pt-12 pb-10">
        <div
            class="max-w-6xl mx-auto px-4 lg:px-0 grid gap-10 md:grid-cols-4 items-center md:items-start justify-center">
            <div>
                <div class="w-full md:w-fit flex flex-col gap-6 items-center md:items-start">
                    <img src="{{ $footer['logo']['url'] }}" alt="{{ $footer['logo']['alt'] }}">
                    <div class="flex gap-3 justify-center items-center w-full">
                        <a href="{{ $footer['logo']['facebook'] }}" aria-label="Facebook" class="hover:text-[#a5d7a3]">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 3.667h-3.533v7.98H9.101z" />
                            </svg>
                        </a>
                        <a href="{{ $footer['logo']['instagram'] }}" aria-label="Instagram"
                            class="hover:text-[#a5d7a3]">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center md:text-left">
                <h4 class="font-semibold mb-4">{{ $footer['contact']['title'] }}</h4>
                <p class="text-[#BEDBBD]">{!! $footer['contact']['address'] !!}</p>
                <p class="mt-4 text-[#BEDBBD]">
                    <span>{{ $footer['contact']['phone'] }}</span><br>
                    <span>{{ $footer['contact']['email'] }}</span>
                </p>
            </div>

            <div class="text-center md:text-left">
                <h4 class="font-semibold mb-4">{{ $footer['hours']['title'] }}</h4>
                <p class="text-[#BEDBBD]">{!! $footer['hours']['content'] !!}</p>
            </div>

            <div class="text-center md:text-left">
                <h4 class="font-semibold mb-4">{{ $footer['services']['title'] }}</h4>
                <ul class="space-y-2">
                    @foreach ($footer['services']['links'] as $link)
                        <li><a href="{{ $link['url'] }}"
                                class="hover:text-white text-[#BEDBBD]">{{ $link['title'] }}</a></li>
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
