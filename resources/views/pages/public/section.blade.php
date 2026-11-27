@extends('layouts.app')
@section('title', 'Sections — ISP GOMBE')

@section('content')
    {{-- Intro --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 pt-10">
        <div class="grid lg:grid-cols-2 gap-8 items-start">
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
                    Scientia Splendet<br> Et Conscientia
                </h1>
                <div class="mt-4 space-y-3 text-[15px] leading-relaxed text-black/80 max-w-xl">
                    <p>La science éclaire l’esprit en ouvrant des horizons nouveaux et en nourrissant la curiosité.</p>
                    <p>La connaissance guide l’action, permettant des choix réfléchis et responsables.</p>
                    <p>Lorsque le savoir s’allie à la sagesse, il devient une force qui transforme les individus et les
                        sociétés.</p>
                    <p>C’est ainsi que nous avançons, pas à pas, vers l’excellence et un avenir éclairé.</p>
                </div>
            </div>
            <figure class="aspect-[16/10] rounded-2xl overflow-hidden shadow-soft">
                <img src="{{ asset('images/sections/intro.svg') }}" alt="Livre et formules" class="w-full h-full object-cover">
            </figure>
        </div>
    </section>

    {{-- Bandeau --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-8">
        <h2 class="text-4xl font-semibold tracking-wide uppercase text-black/60">Nos Sections/Sciences</h2>
        <figure class="mt-4 aspect-[16/7] rounded-2xl overflow-hidden shadow-soft">
            <img src="{{ asset('images/sections/banner.svg') }}" alt="Formules au tableau"
                class="w-full h-full object-cover">
        </figure>
    </section>

    {{-- Sciences exactes --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-12">
        <h3 class="text-3xl md:text-4xl font-extrabold tracking-tight">Sections Sciences exactes</h3>
        <p class="mt-3 max-w-3xl text-[15px] leading-relaxed text-black/80">
            Nos sections de Sciences Exactes offrent une formation approfondie en mathématiques, physique et disciplines
            connexes,
            avec un accent sur la maîtrise conceptuelle et l’application concrète.
        </p>
    </section>

    {{-- Département BTA --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-8">
        <h4 class="text-2xl font-extrabold tracking-tight">Département BTA</h4>
        <div class="mt-6 grid md:grid-cols-3 gap-6">
            @php
                $bta = [
                    [
                        'img' => 'images/sections/sta.svg',
                        'title' => 'STA',
                        'lines' => ['Sciences des aliments', 'Qualité et sécurité', 'Innovation alimentaire'],
                    ],
                    [
                        'img' => 'images/sections/svt.svg',
                        'title' => 'SVT',
                        'lines' => ['Étude du vivant', 'Observation et analyse', 'Protection de l’environnement'],
                    ],
                    [
                        'img' => 'images/sections/bta.svg',
                        'title' => 'BTA',
                        'lines' => ['Biotechnologies appliquées', 'Recherche expérimentale', 'Développement durable'],
                    ],
                ];
            @endphp
            @foreach ($bta as $c)
                <article class="rounded-2xl bg-white shadow-soft overflow-hidden">
                    <figure class="aspect-[16/10]">
                        <img src="{{ asset($c['img']) }}" alt="{{ $c['title'] }}" class="w-full h-full object-cover">
                    </figure>
                    <div class="p-5">
                        <h5 class="text-xl font-extrabold">{{ $c['title'] }}</h5>
                        <ul class="mt-2 text-sm text-black/80 space-y-1">
                            @foreach ($c['lines'] as $l)
                                <li>{{ $l }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    {{-- Département sciences --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-12">
        <h4 class="text-2xl font-extrabold tracking-tight">Département sciences</h4>

        <div class="mt-6 grid md:grid-cols-3 gap-6">
            @php
                $sci = [
                    [
                        'img' => 'images/sections/it-tech.svg',
                        'title' => 'Informatique<br>Technologie',
                        'lines' => [
                            'Découvrir les lois du numérique',
                            'Développer l’esprit critique',
                            'Poursuite d’études',
                        ],
                    ],
                    [
                        'img' => 'images/sections/math-it.svg',
                        'title' => 'Mathématique<br>Informatique',
                        'lines' => ['Logique et raisonnement', 'Analyse de données', 'Résolution de problèmes'],
                    ],
                    [
                        'img' => 'images/sections/it-math.svg',
                        'title' => 'Informatique<br>Mathématique',
                        'lines' => ['Programmation scientifique', 'Calcul avancé', 'Applications pratiques'],
                    ],
                ];
            @endphp

            @foreach ($sci as $c)
                <article class="rounded-2xl bg-white shadow-soft overflow-hidden">
                    <figure class="aspect-[16/10]">
                        <img src="{{ asset($c['img']) }}" alt="{!! strip_tags($c['title']) !!}" class="w-full h-full object-cover">
                    </figure>
                    <div class="p-5">
                        <h5 class="text-lg font-extrabold">{!! $c['title'] !!}</h5>
                        <ul class="mt-2 text-sm text-black/80 space-y-1">
                            @foreach ($c['lines'] as $l)
                                <li>{{ $l }}</li>
                            @endforeach
                        </ul>
                        <div class="mt-4 w-16 h-2 rounded-full bg-black/10"></div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    {{-- Autres sections --}}
    <section class="mx-auto max-w-6xl px-4 lg:px-6 mt-12 mb-16">
        <h4 class="sr-only">Autres sections</h4>
        <div class="grid md:grid-cols-3 gap-6">
            @php
                $others = [
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

            @foreach ($others as $c)
                <article class="rounded-2xl bg-white shadow-soft overflow-hidden">
                    <figure class="aspect-[16/10]">
                        <img src="{{ asset($c['img']) }}" alt="{{ $c['title'] }}" class="w-full h-full object-cover">
                    </figure>
                    <div class="p-5">
                        <h5 class="text-2xl font-extrabold">{{ $c['title'] }}</h5>
                        <ul class="mt-2 text-sm text-black/80 space-y-1">
                            @foreach ($c['lines'] as $l)
                                <li>{{ $l }}</li>
                            @endforeach
                        </ul>
                        <div class="mt-4 w-16 h-2 rounded-full bg-black/10"></div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
