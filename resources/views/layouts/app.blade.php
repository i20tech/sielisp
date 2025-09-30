<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ISP GOMBE')</title>

    {{-- Fonts & Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">

    {{-- Tailwind (CDN) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'system-ui', 'Arial', 'sans-serif']
                    },
                    colors: {
                        brand: {
                            700: '#1f2330'
                        },
                        accent: {
                            500: '#6C5CE7'
                        }
                    },
                    boxShadow: {
                        soft: '0 8px 28px rgba(0,0,0,.08)'
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            color-scheme: light dark
        }

        body {
            font-family: Inter, system-ui, Arial, sans-serif
        }

        img {
            object-fit: cover
        }
    </style>

    @stack('styles')
</head>

<body class="bg-white text-brand-700 antialiased">

    @include('partials.public.header')

    <main>@yield('content')</main>

    @include('partials.public.footer')

    @stack('scripts')
    <script>
        const y = document.getElementById('year');
        if (y) y.textContent = new Date().getFullYear();
    </script>
</body>

</html>
