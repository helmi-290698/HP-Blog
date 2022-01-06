<?php

namespace App\Models;


class Post 
{
   private static $blog_post = [
    [
        "title" => "Post Pertama ",
        "slug" => "post-pertama",
        "author" => "Helmi Paturohman ",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, 
        et magni ad illum nisi neque consequuntur ex aliquid. Eaque itaque earum quos, quidem tempora 
        ipsum laboriosam! Neque blanditiis illo eius inventore. Eligendi reiciendis veritatis molestiae similique
         eos. Perferendis similique culpa nam. At ipsam quae asperiores eos aliquid consectetur sequi suscipit, 
         reprehenderit beatae, fugit nostrum harum placeat possimus? Inventore laudantium voluptates deleniti 
         corrupti illum accusantium aperiam, explicabo consequatur nihil qui tempora 
        corporis reiciendis fuga recusandae veritatis eum dolore, accusamus quos deserunt!"
    ],
    [
        "title" => "Post Kedua ",
        "slug" => "post-kedua",
        "author" => "Wiyan Elmansyah",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima fugiat iure animi temporibus
         impedit quia, culpa, facere quod provident quas quasi quibusdam, pariatur minus soluta! Eum, alias
         voluptatum atque provident eos expedita, numquam accusamus eveniet tenetur sint labore repellendus 
         officiis beatae illo, modi architecto non maiores adipisci voluptatem soluta vero nesciunt? Veritatis 
         fuga ipsum quod, veniam, exercitationem odio reiciendis illum error magni in commodi aliquam perspiciatis 
         distinctio ipsa aut ea dolores unde soluta aliquid nostrum rerum? Officiis sint eum sunt quaerat fugiat,
          earum mollitia ipsum cupiditate nihil dolorem accusamus est.
         Maiores error totam consequuntur et rem deserunt nam voluptatem asperiores."
        ]
    ];
    public static function all(){
        return collect(self::$blog_post);
    }
    public static function find($slug){
        $posts = static::all();
    
        return $posts->firstWhere('slug',$slug);
    }
    

}
