<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Articoli - T1 Legacy</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar">

        <a class="logo" href="{{ route('home') }}">
            T1<span>Legacy</span>
        </a>

        <div class="nav-links">

            <a href="{{ route('home') }}">Homepage</a>

            <a href="{{ route('articles.index') }}">Articoli</a>

        </div>

    </nav>


    <header class="internal-hero">

        <div>

            <p class="eyebrow">Tutti gli articoli</p>

            <h1>Dentro il mondo dei T1.</h1>

            <p>
                Storia, ruoli, strategia, competizione
                e rapporto con la community.
            </p>

        </div>

    </header>


    <main class="articles-section">

        <div class="articles-grid">

            @foreach ($articles as $article)

                <article class="article-card">

                    <img
                        src="{{ $article['image'] }}"
                        alt="{{ $article['title'] }}"
                    >

                    <div class="article-card-content">

                        <span class="category">
                            {{ $article['category'] }}
                        </span>

                        <h2>{{ $article['title'] }}</h2>

                        <p>{{ $article['description'] }}</p>

                        <a href="{{ route('articles.show', ['id' => $article['id']]) }}">
                            Leggi l’articolo →
                        </a>

                    </div>

                </article>

            @endforeach

        </div>

    </main>


    <footer>

        <div>

            <h3>T1<span>Legacy</span></h3>

            <p>Blog dedicato al mondo competitivo.</p>

        </div>

        <div class="footer-links">

            <a href="{{ route('home') }}">Homepage</a>

            <a href="{{ route('articles.index') }}">Articoli</a>

        </div>

    </footer>

</body>

</html>