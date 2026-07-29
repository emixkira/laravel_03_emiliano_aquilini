<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    private function getArticles()
    {
        return [
            [
                'id' => 1,
                'title' => 'La leggenda dei T1',
                'category' => 'Storia',
                'description' => 'Un viaggio attraverso l’identità e l’evoluzione di una delle organizzazioni più conosciute nel panorama competitivo.',
                'content' => 'I T1 rappresentano una delle realtà più riconoscibili degli esport. La loro storia è legata alla ricerca costante dell’eccellenza, alla disciplina e alla capacità di affrontare le competizioni più importanti. Nel corso degli anni l’organizzazione ha costruito una forte identità, diventando un punto di riferimento per giocatori e appassionati.',
                'image' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e'
            ],
            [
                'id' => 2,
                'title' => 'Come nasce una strategia vincente',
                'category' => 'Strategia',
                'description' => 'Preparazione, analisi e collaborazione sono alla base delle prestazioni di un team professionistico.',
                'content' => 'Una strategia competitiva non nasce soltanto durante una partita. Gli staff analizzano gli avversari, studiano le draft e preparano diversi piani di gioco. Ogni componente della squadra deve conoscere il proprio ruolo e adattarsi rapidamente alle decisioni prese durante il match.',
                'image' => 'https://images.unsplash.com/photo-1511512578047-dfb367046420'
            ],
            [
                'id' => 3,
                'title' => 'Il ruolo del mid laner',
                'category' => 'Ruoli',
                'description' => 'Controllo della mappa, gestione delle risorse e capacità di creare opportunità per la squadra.',
                'content' => 'Il mid laner occupa una posizione centrale nella mappa e può influenzare entrambe le corsie laterali. Deve gestire correttamente le ondate, controllare la visione e scegliere quando aiutare i compagni. È un ruolo che richiede ottime capacità meccaniche e una grande comprensione del gioco.',
                'image' => 'https://images.unsplash.com/photo-1547394765-185e1e68f34e'
            ],
            [
                'id' => 4,
                'title' => 'La preparazione prima di un torneo',
                'category' => 'Competizione',
                'description' => 'Allenamento, studio degli avversari e gestione della pressione prima delle grandi competizioni.',
                'content' => 'Prima di un torneo importante, una squadra professionistica affronta settimane di allenamento intenso. Gli scrim permettono di provare composizioni e strategie differenti, mentre le sessioni di revisione servono a individuare gli errori. Anche la gestione dello stress è fondamentale per arrivare preparati alle partite decisive.',
                'image' => 'https://images.unsplash.com/photo-1598550476439-6847785fcea6'
            ],
            [
                'id' => 5,
                'title' => 'L’importanza della bot lane',
                'category' => 'Ruoli',
                'description' => 'Sinergia tra ADC e support, controllo degli obiettivi e gestione delle fasi avanzate della partita.',
                'content' => 'La bot lane richiede una grande coordinazione tra due giocatori. ADC e support devono gestire la fase di corsia, controllare la visione e preparare gli obiettivi neutrali. Nelle fasi avanzate della partita, il posizionamento dell’ADC e la capacità del support di proteggere o iniziare gli scontri diventano determinanti.',
                'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f'
            ],
            [
                'id' => 6,
                'title' => 'Il rapporto tra squadra e tifosi',
                'category' => 'Community',
                'description' => 'La community è una parte fondamentale dell’identità e della crescita di un’organizzazione esportiva.',
                'content' => 'I tifosi seguono le partite, sostengono i giocatori e condividono i momenti più importanti della stagione. Eventi, contenuti digitali e incontri permettono alla squadra di costruire un rapporto diretto con la propria community. Questo legame contribuisce a rendere ogni competizione ancora più coinvolgente.',
                'image' => 'https://images.unsplash.com/photo-1501386761578-eac5c94b800a'
            ]
        ];
    }

    public function home()
    {
        $articles = $this->getArticles();

        $featuredArticles = array_slice($articles, 0, 3);

        return view('home', [
            'featuredArticles' => $featuredArticles
        ]);
    }

    public function index()
    {
        $articles = $this->getArticles();

        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $articles = $this->getArticles();

        foreach ($articles as $article) {
            if ($article['id'] == $id) {
                return view('articles.show', [
                    'article' => $article
                ]);
            }
        }

        abort(404);
    }
}