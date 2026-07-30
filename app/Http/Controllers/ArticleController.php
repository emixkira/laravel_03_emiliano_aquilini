<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public $articles = [
        [
            'id' => 1,
            'title' => 'La storia dei T1',
            'description' => 'La nascita e la crescita dell’organizzazione T1.',
            'category' => 'Storia',
            'content' => 'I T1 sono una delle organizzazioni più importanti della scena competitiva di League of Legends.',
            'image' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e'
        ],
        [
            'id' => 2,
            'title' => 'Il lavoro di squadra',
            'description' => 'Strategia, comunicazione e collaborazione.',
            'category' => 'Competizione',
            'content' => 'Una squadra competitiva deve imparare a comunicare e collaborare per raggiungere la vittoria.',
            'image' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420'
        ],
        [
            'id' => 3,
            'title' => 'Allenamento professionale',
            'description' => 'Come si preparano i giocatori professionisti.',
            'category' => 'Allenamento',
            'content' => 'I professionisti dedicano molte ore all’allenamento e all’analisi delle proprie partite.',
            'image' => 'https://images.unsplash.com/photo-1547394765-185e1e68f34e'
        ]
    ];

    public function home()
    {
        return view('home', [
            'featuredArticles' => $this->articles
        ]);
    }

    public function index()
    {
        return view('articles.index', [
            'articles' => $this->articles
        ]);
    }

    public function show($id)
    {
        foreach ($this->articles as $article) {

            if ($article['id'] == $id) {

                return view('articles.show', [
                    'article' => $article
                ]);

            }

        }

        abort(404);
    }
}