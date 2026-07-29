<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $article['title'] }} - T1 Legacy</title>

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


    <main class="article-detail">

        <a class="back-link" href="{{ route('articles.index') }}">
            ← Torna a tutti gli articoli
        </a>


        <img
            class="detail-image"
            src="{{ $article['image'] }}"
            alt="{{ $article['title'] }}"
        >


        <span class="category">
            {{ $article['category'] }}
        </span>


        <h1>{{ $article['title'] }}</h1>


        <p class="detail-description">
            {{ $article['description'] }}
        </p>


        <div class="article-body">

            <p>{{ $article['content'] }}</p>

            <p>
                Il successo competitivo non dipende mai da un solo elemento:
                nasce dall’equilibrio tra talento individuale, preparazione,
                comunicazione e capacità di adattamento.
            </p>

        </div>


        <div class="detail-navigation">

            <a class="button secondary" href="{{ route('home') }}">
                Homepage
            </a>

            <a class="button primary" href="{{ route('articles.index') }}">
                Altri articoli
            </a>

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