<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Rifqi',
            'email' => 'rifqiebong2507@gmail.com',
            'password' => bcrypt('250704')

        ]);

        User::create([
            'name' => 'Yarda',
            'email' => 'yarda@gmail.com',
            'password' => bcrypt('12345')

        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]);
            
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Isi Judul Pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic a rem in ut. Repellendus delectus sunt dicta quam tenetur recusandae.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Isi Judul Kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic a rem in ut. Repellendus delectus sunt dicta quam tenetur recusandae.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Isi Judul ketiga',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic a rem in ut. Repellendus delectus sunt dicta quam tenetur recusandae.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Isi Judul keempat',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic a rem in ut. Repellendus delectus sunt dicta quam tenetur recusandae.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kelima',
            'slug' => 'judul-kelima',
            'excerpt' => 'Isi Judul kelima',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic a rem in ut. Repellendus delectus sunt dicta quam tenetur recusandae.',
            'category_id' => 2,
            'user_id' => 2
        ]);

    }
}
