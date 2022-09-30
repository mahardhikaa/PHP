<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;


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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();
        Post::factory(10)->create();
        // User::create([
        //     'name' => 'Hafizd Mahardhika',
        //     'email' => 'hafidz.mahardika236@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Logo Web',
            'slug' => 'logo-web'
        ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reprehenderit veniam veritatis quaerat, facilis rem a eum aperiam recusandae, officiis eaque consequatur provident reiciendis ad tempora cum laborum quidem maxime minima blanditiis optio?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reprehenderit veniam veritatis quaerat, facilis rem a eum aperiam recusandae, officiis eaque consequatur provident reiciendis ad tempora cum laborum quidem maxime minima blanditiis optio? Ex eius adipisci, saepe deleniti perferendis mollitia magni eos laboriosam odio in quibusdam veniam velit nesciunt optio quam doloribus ea odit iste tenetur accusantium iusto! Labore explicabo voluptatibus voluptates inventore exercitationem placeat corrupti numquam.</p><p>Ea quisquam est, quas ut accusantium nemo quod ducimus amet, officia placeat consequuntur tenetur accusamus cupiditate illum. Tempora ratione alias a nobis voluptas nihil recusandae in at molestias voluptate. Voluptates officiis qui a perferendis, reprehenderit sed mollitia quidem animi expedita inventore repellat maiores accusamus. Aliquid reprehenderit corrupti non sequi, sit, aut temporibus unde officiis error maxime tenetur vero placeat. </p><p>Saepe dolore iure praesentium ut quisquam obcaecati unde laudantium aliquam veniam in qui vitae doloribus ea minima maxime quia molestiae cumque dignissimos, eligendi sed facere. Culpa perferendis delectus sed laborum eius minus vitae, quia voluptas optio natus id sapiente, quibusdam repudiandae architecto voluptatibus libero, deserunt sequi error assumenda neque veritatis. Tenetur aspernatur quasi debitis sit ut dolores temporibus tempore autem vitae. Culpa, accusantium iusto! Consequuntur dicta quis itaque, iusto doloribus perferendis blanditiis incidunt numquam?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reprehenderit veniam veritatis quaerat, facilis rem a eum aperiam recusandae, officiis eaque consequatur provident reiciendis ad tempora cum laborum quidem maxime minima blanditiis optio?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reprehenderit veniam veritatis quaerat, facilis rem a eum aperiam recusandae, officiis eaque consequatur provident reiciendis ad tempora cum laborum quidem maxime minima blanditiis optio? Ex eius adipisci, saepe deleniti perferendis mollitia magni eos laboriosam odio in quibusdam veniam velit nesciunt optio quam doloribus ea odit iste tenetur accusantium iusto! Labore explicabo voluptatibus voluptates inventore exercitationem placeat corrupti numquam.</p><p>Ea quisquam est, quas ut accusantium nemo quod ducimus amet, officia placeat consequuntur tenetur accusamus cupiditate illum. Tempora ratione alias a nobis voluptas nihil recusandae in at molestias voluptate. Voluptates officiis qui a perferendis, reprehenderit sed mollitia quidem animi expedita inventore repellat maiores accusamus. Aliquid reprehenderit corrupti non sequi, sit, aut temporibus unde officiis error maxime tenetur vero placeat. </p><p>Saepe dolore iure praesentium ut quisquam obcaecati unde laudantium aliquam veniam in qui vitae doloribus ea minima maxime quia molestiae cumque dignissimos, eligendi sed facere. Culpa perferendis delectus sed laborum eius minus vitae, quia voluptas optio natus id sapiente, quibusdam repudiandae architecto voluptatibus libero, deserunt sequi error assumenda neque veritatis. Tenetur aspernatur quasi debitis sit ut dolores temporibus tempore autem vitae. Culpa, accusantium iusto! Consequuntur dicta quis itaque, iusto doloribus perferendis blanditiis incidunt numquam?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reprehenderit veniam veritatis quaerat, facilis rem a eum aperiam recusandae, officiis eaque consequatur provident reiciendis ad tempora cum laborum quidem maxime minima blanditiis optio?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reprehenderit veniam veritatis quaerat, facilis rem a eum aperiam recusandae, officiis eaque consequatur provident reiciendis ad tempora cum laborum quidem maxime minima blanditiis optio? Ex eius adipisci, saepe deleniti perferendis mollitia magni eos laboriosam odio in quibusdam veniam velit nesciunt optio quam doloribus ea odit iste tenetur accusantium iusto! Labore explicabo voluptatibus voluptates inventore exercitationem placeat corrupti numquam.</p><p>Ea quisquam est, quas ut accusantium nemo quod ducimus amet, officia placeat consequuntur tenetur accusamus cupiditate illum. Tempora ratione alias a nobis voluptas nihil recusandae in at molestias voluptate. Voluptates officiis qui a perferendis, reprehenderit sed mollitia quidem animi expedita inventore repellat maiores accusamus. Aliquid reprehenderit corrupti non sequi, sit, aut temporibus unde officiis error maxime tenetur vero placeat. </p><p>Saepe dolore iure praesentium ut quisquam obcaecati unde laudantium aliquam veniam in qui vitae doloribus ea minima maxime quia molestiae cumque dignissimos, eligendi sed facere. Culpa perferendis delectus sed laborum eius minus vitae, quia voluptas optio natus id sapiente, quibusdam repudiandae architecto voluptatibus libero, deserunt sequi error assumenda neque veritatis. Tenetur aspernatur quasi debitis sit ut dolores temporibus tempore autem vitae. Culpa, accusantium iusto! Consequuntur dicta quis itaque, iusto doloribus perferendis blanditiis incidunt numquam?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reprehenderit veniam veritatis quaerat, facilis rem a eum aperiam recusandae, officiis eaque consequatur provident reiciendis ad tempora cum laborum quidem maxime minima blanditiis optio?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium reprehenderit veniam veritatis quaerat, facilis rem a eum aperiam recusandae, officiis eaque consequatur provident reiciendis ad tempora cum laborum quidem maxime minima blanditiis optio? Ex eius adipisci, saepe deleniti perferendis mollitia magni eos laboriosam odio in quibusdam veniam velit nesciunt optio quam doloribus ea odit iste tenetur accusantium iusto! Labore explicabo voluptatibus voluptates inventore exercitationem placeat corrupti numquam.</p><p>Ea quisquam est, quas ut accusantium nemo quod ducimus amet, officia placeat consequuntur tenetur accusamus cupiditate illum. Tempora ratione alias a nobis voluptas nihil recusandae in at molestias voluptate. Voluptates officiis qui a perferendis, reprehenderit sed mollitia quidem animi expedita inventore repellat maiores accusamus. Aliquid reprehenderit corrupti non sequi, sit, aut temporibus unde officiis error maxime tenetur vero placeat. </p><p>Saepe dolore iure praesentium ut quisquam obcaecati unde laudantium aliquam veniam in qui vitae doloribus ea minima maxime quia molestiae cumque dignissimos, eligendi sed facere. Culpa perferendis delectus sed laborum eius minus vitae, quia voluptas optio natus id sapiente, quibusdam repudiandae architecto voluptatibus libero, deserunt sequi error assumenda neque veritatis. Tenetur aspernatur quasi debitis sit ut dolores temporibus tempore autem vitae. Culpa, accusantium iusto! Consequuntur dicta quis itaque, iusto doloribus perferendis blanditiis incidunt numquam?</p>'
        // ]);
    }
}
