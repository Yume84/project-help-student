<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seulement si c'est plus simple pour vous, 
        // vous pouvez utiliser le rendu de blade de Laravel 
        // pour générer le HTML à insérer dans votre DB 
        // sur base d'un fichier .blade
        // Exemple : 
        // vous écrivez votre page dans un fichier "carte-vitale.blade.php"
        // 
        // puis ci-dessous dans le seeder à l'article concerné
        // vous collez : 
        // [
        //      "title"         => "Carte Vitale",
        //      "content"       => view('carte-vitale', compact($article))->render();
        //      "lang_id"       => 1,
        //      "created_at"    => $now,
        //      "updated_at"    => $now,
        // ]
        // 
        //

        // Todo : variable à remplacer par le vrai contenu HTML de chaque article.
        $content_placeholder    = '<h1>TODO : insérer le contenu dans le seeder</h1>';
        $now                    = now()->toDatetimeString();

        $articles           =   [
                                    [
                                        "title"     => "Carte vitale",
                                        "content"   => $content_placeholder,
                                        "tags"      => [1]
                                    ],
                                    [
                                        "title"     => "Ameli",
                                        "content"   => 'Plonge dans le processus simplifié pour obtenir une couverture santé en France grâce à la Caisse Primaire d’Assurance Maladie (CPAM). Notre guide t’accompagne à chaque étape, de l’inscription en ligne à l’obtention de ton numéro de sécurité sociale, garantissant ainsi ton accès aux soins de santé essentiels dès ton arrivée.',
                                        "tags"      => [1]
                                    ],
                                    [
                                        "title"     => "CAF",
                                        "content"   => $content_placeholder,
                                        "tags"      => [2]
                                    ],
                                    [
                                        "title"     => "Inscription universitaire",
                                        "content"   => $content_placeholder,
                                        "tags"      => [3]
                                    ],
                                    [
                                        "title"     => "Demande de logement",
                                        "content"   => 'Une demande de logement peut parfois être laborieuse. Nous t’expliquons les étapes à suivre pour faire ta demande : formulaires à remplir, documents à fournir, ce qu’est un garant et surtout où rechercher lorsqu’on est étudiant.',
                                        "tags"      => [4]
                                    ],
                                    [
                                        "title"     => "Assurance habitation",
                                        "content"   => 'Partir étudier dans un autre pays soulève la question cruciale de l’assurance habitation pour les étudiants étrangers. Cette forme d’assurance revêt une importance capitale pour ces étudiants qui, vivant loin de leur pays d’origine, cherchent à protéger leur logement. Cette fiche explique le fonctionnement de l’assurance habitation pour les étudiants étrangers, les nombreux avantages qu’elle offre, et la raison pour laquelle il est primordial de s’y souscrire.',
                                        "tags"      => [4]
                                    ],
                                    [
                                        "title"     => "Ouvrir un compte bancaire",
                                        "content"   => 'L’ouverture d’un compte bancaire en France est essentielle pour faciliter la gestion financière au quotidien. Ce guide détaille les étapes nécessaires pour ouvrir un compte bancaire en France, les documents requis et les avantages associés à la détention d’un compte bancaire français.',
                                        "tags"      => [5]
                                    ],
                                    [
                                        "title"     => "Demande de visa avant son arrivée",
                                        "content"   => 'Guide étape par étape pour une demande de visa étudiant : de la préparation des documents à la remise des documents, pour faciliter votre parcours d’étudiant international.',
                                        "tags"      => [6]
                                    ],
                                    [
                                        "title"     => "Demande de renouvellement de visa",
                                        "content"   => $content_placeholder,
                                        "tags"      => [6]
                                    ],
                                    [
                                        "title"     => "Acte de naissance",
                                        "content"   => 'Ce document juridique qui atteste ta naissance peut-être demandé lors d’une demande de visa, de l’obtention d’une pièce d’identité, de l’obtention d’un permis de conduire, etc.',
                                        "tags"      => [6]
                                    ],
                                ];

        // on initalise les deux tableaux à insérer en DB
        $insert_articles    = [];
        $insert_article_tag = [];
        
        $i = 1;
        foreach(\App\Models\Language::all() as $language) // pour chaque langue
        {
            app()->setLocale($language->iso);
            foreach($articles as $article_index => $article) // on insert une version de chaque article
            {
                // On insert une version de chaque article
                $insert_articles[] =    [
                                            "title"     => __($article['title']),
                                            "content"   => $article['content'], // placeholder pour l'instant le contenu n'est pas traduit
                                            "lang_id"   => $language->id,
                                            "slug"      => Str::slug(__($article['title'])),
                                            "created_at"=> $now,
                                            "updated_at"=> $now
                                        ];
                // Pour chaque tag associés à l'article
                foreach($article['tags'] as $tag)
                {
                    // on insert un article_tag correspondant
                    $insert_article_tag[] = [
                        "article_id" => $i,
                        "tag_id"     => $tag
                    ];
                }
                $i++;
            }
        }

        // nos deux tableaux sont prêts
        // on les insère en DB

        DB::table('articles')->insert(
            $insert_articles
        );
        
        DB::table('article_tag')->insert(
            $insert_article_tag
        );
    }
}
