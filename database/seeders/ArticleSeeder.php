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
                                        "content"   => $content_placeholder,
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
                                        "content"   => $content_placeholder,
                                        "tags"      => [4]
                                    ],
                                    [
                                        "title"     => "Assurance habitation",
                                        "content"   => $content_placeholder,
                                        "tags"      => [4]
                                    ],
                                    [
                                        "title"     => "Ouvrir un compte bancaire",
                                        "content"   => $content_placeholder,
                                        "tags"      => [5]
                                    ],
                                    [
                                        "title"     => "Demande de visa avant son arrivée",
                                        "content"   => $content_placeholder,
                                        "tags"      => [6]
                                    ],
                                    [
                                        "title"     => "Demande de renouvellement de visa",
                                        "content"   => $content_placeholder,
                                        "tags"      => [6]
                                    ],
                                    [
                                        "title"     => "Acte de naissance",
                                        "content"   => $content_placeholder,
                                        "tags"      => [6]
                                    ],
                                ];

        // on initalise les deux tableaux à insérer en DB
        $insert_articles    = [];
        $insert_article_tag = [];
        
        foreach(\App\Models\Language::all() as $language) // pour chaque langue
        {
            foreach($articles as $article_index => $article) // on insert une version de chaque article
            {
                // on insert une version de chaque article
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
                        "article_id" => $article_index + 1,
                        "tag_id"     => $tag
                    ];
                }
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
