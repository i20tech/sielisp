@extends('layouts.app')
@section('title', 'Accueil — ISP GOMBE')

@section('content')
    {{-- HERO --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 pt-10">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
                    L’avenir de<br class="hidden sm:block"> vos études <br class="hidden sm:block"> commence ici
                </h1>
                <p class="mt-4 max-w-xl text-[15px] leading-relaxed text-black/80">
                    Une institution de référence où chaque parcours étudiant est guidé par la passion d’enseigner,
                    la volonté d’exceller et le désir d’impacter l’avenir.
                </p>
                <a href="#inscription"
                    class="mt-6 inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-indigo-700 text-white font-semibold">
                    S’inscrire <i class="ri-arrow-right-line text-lg"></i>
                </a>
            </div>
            <figure class="aspect-[16/10] rounded-2xl overflow-hidden shadow-soft">
                <img src="{{ asset('images/home/hero-campus.svg') }}" alt="Bâtiment principal"
                    class="w-full h-full object-cover">
            </figure>
        </div>
    </section>

    {{-- DOUBLE CARD / PUNCHLINE --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-12">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <figure class="order-2 lg:order-1 aspect-[4/3] rounded-[2rem] overflow-hidden">
                <img src="{{ asset('images/home/card-ens.svg') }}" alt="Vie de campus" class="w-full h-full object-cover">
            </figure>
            <div class="order-1 lg:order-2">
                <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
                    L’enseignement supérieur à un autre niveau
                </h2>
                <p class="mt-3 text-[15px] leading-relaxed text-black/80">
                    Préparez-vous à vivre une expérience académique qui dépasse les standards.
                </p>
                <a href="#"
                    class="mt-6 inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-700 text-white font-semibold">
                    Details <i class="ri-arrow-right-line text-lg"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- SECTIONS / DÉPARTEMENTS --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-14">
        <h3 class="text-3xl md:text-4xl font-extrabold tracking-tight text-center">
            Nos sections et départements
        </h3>

        <div class="mt-8 grid md:grid-cols-3 gap-6">
            @php
                $cards = [
                    [
                        'img' => 'images/cards/sciences.svg',
                        'title' => 'Sciences',
                        'lines' => [
                            'Découvrir les lois de la nature',
                            'Développer l’esprit critique',
                            'Accès aux études supérieures',
                        ],
                    ],
                    [
                        'img' => 'images/cards/lettres.svg',
                        'title' => 'Lettres',
                        'lines' => [
                            'Maîtriser l’expression écrite',
                            'Découvrir la littérature',
                            'Développer l’analyse de texte',
                        ],
                    ],
                    [
                        'img' => 'images/cards/infotech.svg',
                        'title' => 'Informatique',
                        'lines' => [
                            'Apprendre la programmation',
                            'Maîtriser les outils numériques',
                            'Se préparer aux métiers du digital',
                        ],
                    ],
                ];
            @endphp

            @foreach ($cards as $c)
                <article class="rounded-2xl bg-white shadow-soft overflow-hidden">
                    <figure class="aspect-[16/10]">
                        <img src="{{ asset($c['img']) }}" alt="{{ $c['title'] }}" class="w-full h-full object-cover">
                    </figure>
                    <div class="p-5">
                        <h4 class="text-2xl font-extrabold">{{ $c['title'] }}</h4>
                        <ul class="mt-2 text-sm text-black/80 space-y-1">
                            @foreach ($c['lines'] as $l)
                                <li>{{ $l }}</li>
                            @endforeach
                        </ul>
                        <a href="#"
                            class="mt-4 inline-flex items-center gap-1 px-3 py-1.5 rounded-full bg-black/10 text-sm font-medium">
                            Details <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    {{-- STATS BAND --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-12">
        <div class="rounded-3xl bg-indigo-200/50 px-6 py-8 md:py-10">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold">175.000</div>
                    <div class="text-sm opacity-70">Etudiants</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold">5.000</div>
                    <div class="text-sm opacity-70">Diplômés</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold">500</div>
                    <div class="text-sm opacity-70">Enseignants</div>
                </div>
            </div>
        </div>
    </section>

    {{-- INSCRIPTION / FORM --}}
    <section id="inscription" class="mx-auto max-w-6xl px-4 lg:px-6 mt-14 mb-16">
        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <div>
                <h3 class="text-3xl md:text-4xl font-extrabold tracking-tight">S’inscrire maintenant</h3>
                <p class="mt-4 text-[15px] leading-relaxed text-black/80 max-w-md">
                    Rejoignez une institution reconnue pour son excellence et son engagement dans la formation de la future
                    élite éducative.
                </p>
                <figure class="mt-6 aspect-[4/3] rounded-2xl overflow-hidden shadow-soft max-w-md">
                    <img src="{{ asset('images/home/graduates.svg') }}" alt="Cérémonie de remise des diplômes"
                        class="w-full h-full object-cover">
                </figure>
            </div>

            <form class="bg-black/5 rounded-2xl p-6 md:p-8 space-y-4">
                <div class="grid sm:grid-cols-2 gap-3">
                    <input class="px-4 py-3 rounded-xl bg-white border border-black/10" placeholder="Nom">
                    <input class="px-4 py-3 rounded-xl bg-white border border-black/10" placeholder="Post Nom">
                </div>
                <div class="grid sm:grid-cols-2 gap-3">
                    <input class="px-4 py-3 rounded-xl bg-white border border-black/10" placeholder="Prenom">
                    <input class="px-4 py-3 rounded-xl bg-white border border-black/10" placeholder="Pays d’origine">
                </div>
                <div class="grid sm:grid-cols-2 gap-3">
                    <input type="text" class="px-4 py-3 rounded-xl bg-white border border-black/10"
                        placeholder="Lieu de naissance">
                    <input type="date" class="px-4 py-3 rounded-xl bg-white border border-black/10"
                        placeholder="Date de naissance">
                </div>
                <div class="grid sm:grid-cols-2 gap-3">
                    <input class="px-4 py-3 rounded-xl bg-white border border-black/10" placeholder="Filière">
                    <input class="px-4 py-3 rounded-xl bg-white border border-black/10" placeholder="Niveau">
                </div>
                <button
                    class="w-full mt-4 inline-flex justify-center items-center gap-2 px-5 py-3 rounded-full bg-indigo-700 text-white font-semibold">
                    S’inscrire
                </button>
            </form>
        </div>
    </section>
@endsection
