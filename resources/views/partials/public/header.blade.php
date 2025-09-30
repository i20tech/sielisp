<header class="sticky top-0 z-40 bg-white/80 backdrop-blur border-b border-black/5">
    <div class="mx-auto max-w-6xl px-4 lg:px-6">
        <div class="flex items-center justify-between h-16">
            <a class="flex items-center gap-2" href="{{ route('home') }}">
                <img src="{{ asset('images/logos/logo1.svg') }}" width="160px" height="auto" alt="">
            </a>

            <nav class="hidden md:flex items-center gap-1">
                <a href="{{ route('apropos') }}" class="px-4 py-2 rounded-full text-sm font-medium hover:bg-black/5">À
                    propos</a>
                <a href="{{ route('sections.index') }}"
                    class="px-4 py-2 rounded-full text-sm font-medium hover:bg-black/5">Sections</a>
            </nav>

            <div class="flex items-center gap-2">
                <a href="#"
                    class="hidden sm:inline-flex px-4 py-2 rounded-full bg-brand-700 text-white text-sm font-semibold hover:opacity-90 transition">
                    S’inscrire
                </a>
                <button class="inline-grid place-items-center size-10 rounded-full bg-black/5 hover:bg-black/10">
                    <i class="ri-user-3-line text-lg"></i>
                </button>
            </div>
        </div>
    </div>
</header>
