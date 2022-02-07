<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
    [
        "title" => "Judul Post Rifqi",
        "slug" => "judul-post-pertama",
        "author" => "Rifqi",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis fugit, nobis vel animi nulla ut culpa fuga maxime totam beatae. 
        Nemo illum ab aut cumque modi laborum, voluptas dicta et impedit nihil mollitia vero laboriosam consequuntur quas exercitationem, neque odio deleniti. 
        Reprehenderit voluptas nobis corporis dolores molestiae eligendi, culpa nulla tempore eos ducimus odit accusantium quo amet id ut atque illum minima dolore? 
        Aliquam velit aliquid, nobis commodi repellendus nostrum quis itaque id beatae consectetur assumenda fugiat. Sit quasi numquam aspernatur debitis possimus architecto, 
        sequi impedit cupiditate! Expedita labore aliquid magnam consequuntur deleniti impedit a aut veniam debitis est consequatur rem, tempora libero cumque animi corrupti quia. 
        Nostrum tempora neque sed repellendus modi rem similique eligendi reiciendis eveniet, 
        facilis dolore delectus esse quasi consequuntur harum exercitationem eius mollitia praesentium pariatur aliquam iure recusandae corrupti saepe? Facilis atque illum nam id, 
        fugiat saepe, ratione dolorem accusamus sunt libero officia explicabo quo."
    ],
    [
        "title" => "Judul Post Yarda",
        "slug" => "judul-post-kedua",
        "author" => "Yarda",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore sed illum, esse ab animi similique soluta, nisi debitis rerum itaque ipsa qui minima exercitationem? 
        Fuga temporibus exercitationem voluptatibus hic doloremque, similique assumenda tenetur rem cum iusto animi! Ducimus sit autem consequuntur, 
        doloremque eveniet accusamus laudantium culpa facilis repellat labore quis fugit nostrum ullam mollitia, amet perspiciatis, laboriosam repudiandae. 
        Animi voluptates dolor labore autem, reprehenderit numquam sunt suscipit vel, amet alias voluptatum. Quo possimus porro, 
        temporibus delectus quam similique ex officia provident quos eius saepe ut quod tempore molestias cum totam error autem. Similique ad mollitia, 
        magni magnam quod repellat totam ullam cumque nulla maiores minus minima illum voluptatum vero incidunt laborum! Quibusdam doloremque provident itaque quos ipsum porro, 
        fugiat consequatur."
    ],
];

    public static function all()
    {
        return collect (self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

    //$post =[];
    //foreach($posts as $p) {
    //    if($p["slug"] === $slug) {
    //        $post = $p;
    //    }
    //}

    return $posts->firstWhere('slug',$slug);
    }

}