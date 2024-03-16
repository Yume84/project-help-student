<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('articles')->insert(
            [
                [
                    "title"     => "Cart vitale",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
                [
                    "title"     => "Ameli",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
                [
                    "title"     => "CAF",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
                [
                    "title"     => "Inscription universitaire",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
                [
                    "title"     => "Demande de logement",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
                [
                    "title"     => "Assurance habitation",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
                [
                    "title"     => "Ouvrir un compte bancaire",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
                [
                    "title"     => "Demande de visa avant son arrivée",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
                [
                    "title"     => "Demande de renouvellement de visa",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
                [
                    "title"     => "Acte de naissance",
                    "content"   => $content_placeholder,
                    "lang_id"   => 1,
                    "created_at"=> $now,
                    "updated_at"=> $now
                ],
            ]
        );
        // on créer les entrées dans la table pivot pour assigner des tags à des articles
        DB::table('article_tag')->insert(
            [
                [
                    "article_id"    => 1,
                    "tag_id"        => 1,
                ],
                [
                    "article_id"    => 2,
                    "tag_id"        => 1,
                ],
                [
                    "article_id"    => 3,
                    "tag_id"        => 2,
                ],
                [
                    "article_id"    => 4,
                    "tag_id"        => 3,
                ],
                [
                    "article_id"    => 5,
                    "tag_id"        => 4,
                ],
                [
                    "article_id"    => 6,
                    "tag_id"        => 4,
                ],
                [
                    "article_id"    => 7,
                    "tag_id"        => 5,
                ],
                [
                    "article_id"    => 8,
                    "tag_id"        => 6,
                ],
                [
                    "article_id"    => 9,
                    "tag_id"        => 6,
                ],
                [
                    "article_id"    => 10,
                    "tag_id"        => 6,
                ],
            ]
        );
    }
}
