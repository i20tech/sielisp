@extends('layouts.app')
@section('title', 'À propos — ISP GOMBE')

@section('content')
    {{-- HERO --}}
    <section class="relative z-10 mx-auto max-w-6xl px-4 lg:px-6 pt-10">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-center">
            44 ans déjà et l’histoire continue
        </h1>
        <p class="mt-3 max-w-2xl mx-auto text-center text-[15px] leading-relaxed text-black/80">
            Une institution bâtie sur les fondations du savoir, portée par des hommes et des femmes engagés.
            44 ans d’excellence académique, de recherche, de pédagogie, au service de la nation.
        </p>
        <figure class="mt-8 aspect-[16/9] rounded-2xl overflow-hidden shadow-soft max-w-4xl mx-auto">
            <img src="{{ asset('images/apropos/building.svg') }}" alt="Bâtiment ISP Gombe" class="w-full h-full object-cover">
        </figure>
    </section>
    <div
        class="w-full absolute inset-x-0 md:top-[90%] lg:top-[90%] top-[40%] z-0 -translate-y-1/2 h-[400px] md:h-[320px] bg-black">
    </div>

    {{-- BLOC NOIR / MANIFESTE --}}
    <section class="relative z-10 mt-16 w-full bg-black text-white">
        <div class="mx-auto max-w-6xl px-4 lg:px-6 py-14 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
                    L’enseignement supérieur à un autre niveau
                </h2>
                <p class="mt-4 text-[15px] leading-relaxed text-white/80 max-w-xl">
                    Préparez-vous à vivre bien plus qu’un simple parcours universitaire. À l’ISP-Gombe, chaque étape
                    de votre formation est pensée pour aller au-delà des standards traditionnels : enseignement rigoureux,
                    accompagnement personnalisé, environnement stimulant, et ouverture vers les réalités du monde
                    professionnel.
                    Ici, vous ne vous contentez pas d’apprendre, vous êtes formé pour innover, réfléchir, enseigner,
                    transformer.
                </p>
            </div>
            <div class="grid justify-items-end">
                <figure class="aspect-[1/1] max-w-sm rounded-[2rem] overflow-hidden">
                    <img src="{{ asset('images/home/card-ens.svg') }}" alt="Campus et étudiants"
                        class="w-full h-full object-cover">
                </figure>
            </div>
        </div>
    </section>

    {{-- STATS --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-10">
        <div class="grid md:grid-cols-3 gap-6 text-center">
            <div>
                <div class="text-3xl md:text-4xl font-extrabold">175.000</div>
                <div class="text-sm text-black/70">Etudiants</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-extrabold">5.000</div>
                <div class="text-sm text-black/70">Diplômés</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-extrabold">500</div>
                <div class="text-sm text-black/70">Enseignants</div>
            </div>
        </div>
    </section>

    {{-- LARGE IMAGE --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-10">
        <figure class="aspect-[16/9] rounded-[2rem] overflow-hidden shadow-soft">
            <img src="{{ asset('images/apropos/graduation.svg') }}" alt="Promotion" class="w-full h-full object-cover">
        </figure>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="mx-auto max-w-6xl px-4 lg:px-6 mt-14 mb-20">
        <h3 class="text-3xl font-extrabold text-center">Contact</h3>

        <div class="mt-8 grid md:grid-cols-2 gap-6 items-start">
            {{-- Map à gauche --}}
            <div class="rounded-3xl overflow-hidden shadow-soft">
                <div class="relative aspect-[4/3] md:aspect-[16/9]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31827.701397123004!2d15.2875679!3d-4.3238443!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a33c30df35e05%3A0xbae68999eb2ad253!2sISP-Gombe!5e0!3m2!1sfr!2scd!4v1759194777623!5m2!1sfr!2scd"
                        class="absolute inset-0 w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" aria-label="Localisation ISP Gombe">
                    </iframe>
                </div>
            </div>

            {{-- Formulaire à droite --}}
            <form action="#" method="post" class="rounded-3xl bg-black/5 p-6 md:p-8 space-y-4">
                @csrf

                <div class="grid sm:grid-cols-2 gap-3">
                    <div>
                        <label for="name" class="block text-sm font-medium mb-1">Nom complet</label>
                        <input id="name" name="name" type="text" required autocomplete="name"
                            class="w-full px-4 py-3 rounded-xl bg-white border border-black/10 focus:outline-none focus:ring-2 focus:ring-indigo-600"
                            placeholder="Votre nom">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium mb-1">Email</label>
                        <input id="email" name="email" type="email" required autocomplete="email"
                            class="w-full px-4 py-3 rounded-xl bg-white border border-black/10 focus:outline-none focus:ring-2 focus:ring-indigo-600"
                            placeholder="exemple@domaine.com">
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 gap-3">
                    <div>
                        <label for="phone" class="block text-sm font-medium mb-1">Téléphone (optionnel)</label>
                        <input id="phone" name="phone" type="tel" autocomplete="tel"
                            class="w-full px-4 py-3 rounded-xl bg-white border border-black/10 focus:outline-none focus:ring-2 focus:ring-indigo-600"
                            placeholder="+243 …">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium mb-1">Sujet</label>
                        <input id="subject" name="subject" type="text"
                            class="w-full px-4 py-3 rounded-xl bg-white border border-black/10 focus:outline-none focus:ring-2 focus:ring-indigo-600"
                            placeholder="Objet de votre message">
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium mb-1">Message</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full px-4 py-3 rounded-xl bg-white border border-black/10 focus:outline-none focus:ring-2 focus:ring-indigo-600"
                        placeholder="Écrivez votre message…"></textarea>
                </div>

                <button type="submit"
                    class="w-full inline-flex justify-center items-center gap-2 px-5 py-3 rounded-full bg-indigo-700 text-white font-semibold">
                    Envoyer le message
                </button>

                <p class="text-xs text-black/50">En soumettant, vous acceptez notre politique de confidentialité.</p>
            </form>
        </div>
    </section>

@endsection
