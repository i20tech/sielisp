<footer class="mt-16 border-t border-black/5 bg-slate-50">
    <div class="mx-auto max-w-6xl px-4 lg:px-6 py-10">
        <div class="grid md:grid-cols-3 gap-10">
            <div>
                <div class="h-12 w-40">
                    <img src="{{ asset('images/logos/logo1.svg') }}" width="100%" height="auto" alt="">
                </div>
            </div>

            <div>
                <h5 class="text-sm font-semibold uppercase tracking-wide text-black/60">Liens utiles</h5>
                <ul class="mt-3 space-y-2 text-[15px]">
                    <li><a class="hover:underline" href="{{ route('home') }}">Accueil</a></li>
                    <li><a class="hover:underline" href="{{ route('apropos') }}">Apropos</a></li>
                    <li><a class="hover:underline" href="#contact">Contacts</a></li>
                    <li><a class="hover:underline" href="#">S’inscrire</a></li>
                </ul>
            </div>

            <div>
                <h5 class="text-sm font-semibold uppercase tracking-wide text-black/60">Les sections</h5>
                <ul class="mt-3 space-y-2 text-[15px]">
                    <li><a class="hover:underline" href="{{ route('sections.index') }}">Sciences Exactes</a></li>
                    <li><a class="hover:underline" href="{{ route('sections.index') }}">Lettres et Sciences Humaines</a>
                    </li>
                    <li><a class="hover:underline" href="{{ route('sections.index') }}">Gestions Commerciales</a></li>
                    <li><a class="hover:underline" href="{{ route('sections.index') }}">Sciences et Techniques
                            d’Accueil</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-10 text-xs text-black/50">
            © <span id="year"></span> ISP GOMBE — Tous droits réservés.
        </div>
    </div>
</footer>
