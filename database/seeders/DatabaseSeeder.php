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
            'name' => 'Hasbulah',
            'email' => 'hasbulah@mail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Shezan',
            'email' => 'shezan@mail.com',
            'password' => bcrypt('54321')
        ]);

    Category::create([
        'name' => 'Web Pemogramman',
        'slug' => 'web-pemogramman'
    ]);
    Category::create([
        'name' => 'Personal',
        'slug' => 'personal'
    ]);
   
    Post::create([
        'title' => 'Judul Pertama',
        'slug' => 'judul-pertama',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus culpa veritatis provident incidunt facere, sed perspiciatis quis voluptates nam,',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus culpa veritatis provident incidunt facere, sed perspiciatis quis voluptates nam, vel dolor nemo ea eligendi sit sequi repudiandae saepe. Exercitationem distinctio soluta cum corrupti esse earum ipsum eum, iste quo dignissimos sint voluptatem voluptates harum deleniti ex ullam laudantium qui! Sunt, ut! Aperiam dignissimos perspiciatis et odio ad sint reiciendis iste excepturi amet, molestias non, architecto maxime cumque illo deserunt, eos suscipit quibusdam itaque magni enim voluptate ex consectetur iusto. Voluptas modi, quos quas repudiandae dolorem eligendi reiciendis aut quo voluptatem laboriosam ipsum blanditiis aliquam hic exercitationem ad non libero.',
        'category_id' => 1,
        'user_id' => 1
    ]);

    Post::create([
        'title' => 'Judul Ke Dua',
        'slug' => 'judul-ke-dua',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus culpa veritatis provident incidunt facere, sed perspiciatis quis voluptates nam,',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus culpa veritatis provident incidunt facere, sed perspiciatis quis voluptates nam, vel dolor nemo ea eligendi sit sequi repudiandae saepe. Exercitationem distinctio soluta cum corrupti esse earum ipsum eum, iste quo dignissimos sint voluptatem voluptates harum deleniti ex ullam laudantium qui! Sunt, ut! Aperiam dignissimos perspiciatis et odio ad sint reiciendis iste excepturi amet, molestias non, architecto maxime cumque illo deserunt, eos suscipit quibusdam itaque magni enim voluptate ex consectetur iusto. Voluptas modi, quos quas repudiandae dolorem eligendi reiciendis aut quo voluptatem laboriosam ipsum blanditiis aliquam hic exercitationem ad non libero.',
        'category_id' => 1,
        'user_id' => 1
    ]);

    Post::create([
        'title' => 'Judul Ke Tiga',
        'slug' => 'judul-ke-tiga',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus culpa veritatis provident incidunt facere, sed perspiciatis quis voluptates nam,',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus culpa veritatis provident incidunt facere, sed perspiciatis quis voluptates nam, vel dolor nemo ea eligendi sit sequi repudiandae saepe. Exercitationem distinctio soluta cum corrupti esse earum ipsum eum, iste quo dignissimos sint voluptatem voluptates harum deleniti ex ullam laudantium qui! Sunt, ut! Aperiam dignissimos perspiciatis et odio ad sint reiciendis iste excepturi amet, molestias non, architecto maxime cumque illo deserunt, eos suscipit quibusdam itaque magni enim voluptate ex consectetur iusto. Voluptas modi, quos quas repudiandae dolorem eligendi reiciendis aut quo voluptatem laboriosam ipsum blanditiis aliquam hic exercitationem ad non libero.',
        'category_id' => 2,
        'user_id' => 1
    ]);

    Post::create([
        'title' => 'Judul Ke Empat',
        'slug' => 'judul-ke-empat',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus culpa veritatis provident incidunt facere, sed perspiciatis quis voluptates nam,',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus culpa veritatis provident incidunt facere, sed perspiciatis quis voluptates nam, vel dolor nemo ea eligendi sit sequi repudiandae saepe. Exercitationem distinctio soluta cum corrupti esse earum ipsum eum, iste quo dignissimos sint voluptatem voluptates harum deleniti ex ullam laudantium qui! Sunt, ut! Aperiam dignissimos perspiciatis et odio ad sint reiciendis iste excepturi amet, molestias non, architecto maxime cumque illo deserunt, eos suscipit quibusdam itaque magni enim voluptate ex consectetur iusto. Voluptas modi, quos quas repudiandae dolorem eligendi reiciendis aut quo voluptatem laboriosam ipsum blanditiis aliquam hic exercitationem ad non libero.',
        'category_id' => 2,
        'user_id' => 2
    ]);
    }
}
