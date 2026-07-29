<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>T1 Legacy</title>

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


    <header class="hero">

        <div class="hero-content">

            <p class="eyebrow">Esport · Competizione · Community</p>

            <h1>La storia dietro la leggenda.</h1>

            <p class="hero-description">
                Un blog dedicato ai T1, alla cultura esportiva,
                alla strategia e alle emozioni delle grandi competizioni.
            </p>

            <div class="hero-buttons">

                <a class="button primary" href="{{ route('articles.index') }}">
                    Scopri gli articoli
                </a>

                <a class="button secondary" href="#featured">
                    Leggi le storie
                </a>

            </div>

        </div>

    </header>


    <main>

        <section class="intro-section">

            <div class="section-heading">

                <p class="eyebrow">Il mondo competitivo</p>

                <h2>Molto più di una semplice partita.</h2>

                <p>
                    Preparazione, disciplina, strategia e collaborazione:
                    scopri ciò che avviene dentro e fuori dalla mappa.
                </p>

            </div>


            <div class="stats-grid">

                <article class="stat-card">

                    <strong>5</strong>

                    <span>Ruoli in squadra</span>

                </article>


                <article class="stat-card">

                    <strong>1</strong>

                    <span>Obiettivo comune</span>

                </article>


                <article class="stat-card">

                    <strong>∞</strong>

                    <span>Momenti memorabili</span>

                </article>

            </div>

        </section>


        <section id="featured" class="articles-section">

            <div class="section-heading">

                <p class="eyebrow">In evidenza</p>

                <h2>Storie dalla scena competitiva.</h2>

            </div>


            <div class="articles-grid">

                @foreach ($featuredArticles as $article)

                    <article class="article-card">

                        <img
                            src="{{ $article['image'] }}"
                            alt="{{ $article['title'] }}"
                        >

                        <div class="article-card-content">

                            <span class="category">
                                {{ $article['category'] }}
                            </span>

                            <h3>{{ $article['title'] }}</h3>

                            <p>{{ $article['description'] }}</p>

                            <a href="{{ route('articles.show', ['id' => $article['id']]) }}">
                                Leggi l’articolo →
                            </a>

                        </div>

                    </article>

                @endforeach

            </div>


            <div class="center-button">

                <a class="button primary" href="{{ route('articles.index') }}">
                    Visualizza tutti gli articoli
                </a>

            </div>

        </section>

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