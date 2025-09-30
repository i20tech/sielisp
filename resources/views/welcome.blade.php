<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ISP GOMBE – Accueil</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    sans: ['Inter', 'ui-sans-serif', 'system-ui']
                },
                extend: {
                    colors: {
                        ink: '#111111',
                        mute: '#6B7280',
                        surface: '#F5F6F7',
                        line: '#E5E7EB',
                        primary: '#111111'
                    },
                    borderRadius: {
                        card: '16px'
                    },
                    boxShadow: {
                        soft: '0 2px 6px rgba(0,0,0,.06), 0 12px 24px rgba(0,0,0,.04)'
                    }
                }
            }
        }
    </script>

    <style>
        /* Petits détails visuels pour coller au mockup */
        .logo-dot {
            width: 20px;
            height: 20px;
            border-radius: 9999px;
            background: #E11D48;
            display: inline-block;
            margin-right: 8px;
        }

        .pill {
            height: 10px;
            width: 44px;
            border-radius: 9999px;
            background: #E5E7EB;
            display: inline-block;
        }

        .clamp {
            max-width: 72ch;
        }

        .grid-auto-fit {
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }

        .badge {
            border-radius: 9999px;
            padding: 8px 14px;
            background: #111;
            color: #fff;
            font-weight: 600;
        }

        .icon-circle {
            width: 36px;
            height: 36px;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #111;
            color: #fff;
        }

        .field {
            @apply w-full rounded-lg border border-line bg-white px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-black;
        }
    </style>
</head>

<body class="bg-white text-ink antialiased">

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-line">
        <div class="mx-auto max-w-6xl px-4 sm:px-6">
            <div class="flex items-center justify-between h-16">
                <a href="#" class="flex items-center gap-2">
                    <span class="logo-dot"></span>
                    <span class="font-semibold tracking-tight">ISP GOMBE</span>
                </a>

                <nav class="hidden md:flex items-center gap-8 text-sm text-ink/80">
                    <a href="#" class="hover:text-ink">A propos</a>
                    <a href="#" class="hover:text-ink">Sections</a>
                </nav>

                <div class="flex items-center gap-3">
                    <a href="#" class="hidden sm:inline-flex badge">S’inscrire</a>
                    <button class="icon-circle" aria-label="Rechercher">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m21 21-4.35-4.35M10 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero -->
        <section class="mx-auto max-w-6xl px-4 sm:px-6 py-12 sm:py-16">
            <div class="grid md:grid-cols-2 gap-10 md:gap-12 items-center">
                <div>
                    <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight tracking-tight">
                        L’avenir de<br />vos études<br />commence ici
                    </h1>
                    <p class="mt-6 text-ink/70 clamp">
                        Une institution de référence où chaque parcours étudiant est guidé
                        par la passion d’enseigner, la volonté d’exceller et le désir d’impacter l’avenir.
                    </p>
                </div>
                <div>
                    <img class="w-full rounded-card object-cover h-[320px] shadow-soft"
                        src="https://images.unsplash.com/photo-1537202108838-e7072bad1927?q=80&w=1600&auto=format&fit=crop"
                        alt="Bâtiment ISP Gombe" />
                </div>
            </div>

            <!-- Logos partenaires -->
            <div class="mt-10 sm:mt-14 grid grid-cols-2 sm:grid-cols-5 gap-6 items-center opacity-80">
                <img class="mx-auto h-8 object-contain" src="https://dummyimage.com/120x32/ddd/222.png&text=PMF"
                    alt="PMF" />
                <img class="mx-auto h-8 object-contain" src="https://dummyimage.com/120x32/ddd/222.png&text=Ferrari"
                    alt="Ferrari" />
                <img class="mx-auto h-8 object-contain" src="https://dummyimage.com/120x32/ddd/222.png&text=BOSS"
                    alt="BOSS" />
                <img class="mx-auto h-8 object-contain" src="https://dummyimage.com/140x32/ddd/222.png&text=BLACKFIN"
                    alt="BLACKFIN" />
                <img class="mx-auto h-8 object-contain" src="https://dummyimage.com/140x32/ddd/222.png&text=SFCable"
                    alt="SFCable" />
            </div>
        </section>

        <!-- Feature split -->
        <section class="mx-auto max-w-6xl px-4 sm:px-6 py-6 sm:py-8">
            <div class="grid md:grid-cols-2 gap-10 md:gap-12 items-center">
                <!-- images cluster -->
                <div class="relative">
                    <div class="rounded-[24px] overflow-hidden w-[280px] h-[200px] shadow-soft">
                        <img class="w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=1200&auto=format&fit=crop"
                            alt="Campus" />
                    </div>
                    <div
                        class="rounded-[24px] overflow-hidden w-[220px] h-[160px] shadow-soft absolute -right-6 bottom-0 border-4 border-white">
                        <img class="w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1200&auto=format&fit=crop"
                            alt="Étudiants" />
                    </div>
                </div>

                <!-- text -->
                <div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight tracking-tight">
                        L’enseignement<br />supérieur à un<br />autre niveau
                    </h2>
                    <p class="mt-4 text-ink/70">
                        Préparez-vous à vivre une expérience académique qui dépasse les standards.
                    </p>
                    <a href="#" class="mt-5 inline-block font-semibold underline underline-offset-4">En savoir
                        plus</a>
                </div>
            </div>
        </section>

        <!-- Sections & départements -->
        <section class="mx-auto max-w-6xl px-4 sm:px-6 py-12 sm:py-16">
            <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Nos sections et départements</h3>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Sciences -->
                <article class="space-y-3">
                    <div class="rounded-card overflow-hidden h-44">
                        <img class="w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?q=80&w=1600&auto=format&fit=crop"
                            alt="Sciences" />
                    </div>
                    <h4 class="text-xl font-semibold">Sciences</h4>
                    <ul class="text-sm text-ink/75 leading-6">
                        <li>Découvrir les lois de la nature</li>
                        <li>Développer l’esprit critique</li>
                        <li>Accès aux études supérieures</li>
                    </ul>
                    <span class="pill"></span>
                </article>

                <!-- Lettres -->
                <article class="space-y-3">
                    <div class="rounded-card overflow-hidden h-44">
                        <img class="w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1600&auto=format&fit=crop"
                            alt="Lettres" />
                    </div>
                    <h4 class="text-xl font-semibold">Lettres</h4>
                    <ul class="text-sm text-ink/75 leading-6">
                        <li>Maîtriser l’expression écrite</li>
                        <li>Découvrir la littérature</li>
                        <li>Développer l’analyse de texte</li>
                    </ul>
                    <span class="pill"></span>
                </article>

                <!-- Informatique -->
                <article class="space-y-3">
                    <div class="rounded-card overflow-hidden h-44">
                        <img class="w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f?q=80&w=1600&auto=format&fit=crop"
                            alt="Informatique" />
                    </div>
                    <h4 class="text-xl font-semibold">Informatique</h4>
                    <ul class="text-sm text-ink/75 leading-6">
                        <li>Apprendre la programmation</li>
                        <li>Maîtriser les outils numériques</li>
                        <li>Se préparer aux métiers du digital</li>
                    </ul>
                    <span class="pill"></span>
                </article>
            </div>

            <!-- stats band -->
            <div class="mt-12 rounded-[24px] bg-[#E8E8F4] text-ink px-6 sm:px-10 py-8 sm:py-10">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center">
                    <div>
                        <div class="text-3xl sm:text-4xl font-extrabold tracking-tight">175.000</div>
                        <div class="mt-1 text-ink/70">Etudiants</div>
                    </div>
                    <div>
                        <div class="text-3xl sm:text-4xl font-extrabold tracking-tight">5.000</div>
                        <div class="mt-1 text-ink/70">Diplômés</div>
                    </div>
                    <div>
                        <div class="text-3xl sm:text-4xl font-extrabold tracking-tight">500</div>
                        <div class="mt-1 text-ink/70">Enseignants</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- S'inscrire maintenant -->
        <section class="mx-auto max-w-6xl px-4 sm:px-6 py-12 sm:py-16">
            <div class="grid md:grid-cols-2 gap-10 md:gap-12 items-start">
                <div>
                    <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight">S’inscrire<br />maintenant</h3>

                    <div class="mt-6 rounded-card overflow-hidden w-full max-w-[320px] shadow-soft">
                        <img class="w-full h-[160px] object-cover"
                            src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=1200&auto=format&fit=crop"
                            alt="Cérémonie" />
                    </div>

                    <p class="mt-5 text-ink/70 max-w-md">
                        Rejoignez une institution reconnue pour son excellence et son engagement
                        dans la formation de la future élite éducative.
                    </p>
                </div>

                <!-- form -->
                <div class="rounded-[20px] bg-[#F2F2F4] p-5 sm:p-6">
                    <form class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div><label class="sr-only">Nom</label><input class="field" placeholder="Nom" /></div>
                        <div><label class="sr-only">Post Nom</label><input class="field" placeholder="Post Nom" />
                        </div>

                        <div><label class="sr-only">Prénom</label><input class="field" placeholder="Prenom" /></div>
                        <div><label class="sr-only">Pays d’origine</label><input class="field"
                                placeholder="Pays d’origine" /></div>

                        <div><label class="sr-only">Lieu de naissance</label><input class="field"
                                placeholder="Lieu de naissance" /></div>
                        <div><label class="sr-only">Date de naissance</label><input class="field"
                                placeholder="Date de naissance" type="date" /></div>

                        <div><label class="sr-only">Filière</label><input class="field" placeholder="Filière" />
                        </div>
                        <div><label class="sr-only">Niveau</label><input class="field" placeholder="Niveau" /></div>
                    </form>

                    <div class="mt-6 flex justify-center">
                        <button
                            class="inline-flex items-center justify-center rounded-full bg-[#1F1F1F] text-white px-8 py-3 font-semibold hover:opacity-90">
                            S’inscrire
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-line">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 py-10">
            <div class="grid md:grid-cols-4 gap-8 items-start">
                <div class="md:col-span-1">
                    <a href="#"
                        class="inline-flex items-center gap-2 rounded-full border border-line px-4 py-2">
                        <span class="logo-dot"></span>
                        <span class="font-medium">ISP GOMBE</span>
                    </a>
                </div>

                <div>
                    <h5 class="font-semibold mb-3">Liens utiles</h5>
                    <ul class="space-y-2 text-ink/75">
                        <li><a href="#" class="hover:text-ink">Accueil</a></li>
                        <li><a href="#" class="hover:text-ink">Apropos</a></li>
                        <li><a href="#" class="hover:text-ink">Contacts</a></li>
                        <li><a href="#" class="hover:text-ink">S’inscrire</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-semibold mb-3">Les sections</h5>
                    <ul class="space-y-2 text-ink/75">
                        <li><a href="#" class="hover:text-ink">Sciences Exactes</a></li>
                        <li><a href="#" class="hover:text-ink">Lettres et Sciences Humaines</a></li>
                        <li><a href="#" class="hover:text-ink">Gestions Commerciales</a></li>
                        <li><a href="#" class="hover:text-ink">Sciences et Techniques d’Accueil</a></li>
                    </ul>
                </div>

                <div class="hidden md:block"></div>
            </div>
        </div>
    </footer>

</body>

</html>
