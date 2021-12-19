<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Judul Pertama',
                'category_id' => 1,
                'user_id' => 1,
                'slug' => 'judul_pertama',
                'author' => 'Dimas',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ratione?',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae magni error, quisquam minima, quo dignissimos id modi quidem possimus quae aut quaerat velit. Aperiam animi quisquam tenetur ullam quis asperiores.</p> <p>Cumque officiis ullam fuga unde libero. Consequuntur, vero corporis, sed repudiandae accusantium ipsa ipsam eligendi unde id suscipit facere.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aut recusandae ducimus nihil temporibus. Vitae quo libero qui laudantium iusto quibusdam sed eius sint delectus sit alias in, voluptates voluptatum quos quia quam magni earum dolores totam iure laboriosam optio saepe. Illum, hic delectus harum perferendis veritatis ratione possimus quasi?</p>'
            ],
            [
                'title' => 'Judul Kedua',
                'category_id' => 3,
                'user_id' => 1,
                'slug' => 'judul_kedua',
                'author' => 'Dimas',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ratione?',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae magni error, quisquam minima, quo dignissimos id modi quidem possimus quae aut quaerat velit. Aperiam animi quisquam tenetur ullam quis asperiores.</p> <p>Cumque officiis ullam fuga unde libero. Consequuntur, vero corporis, sed repudiandae accusantium ipsa ipsam eligendi unde id suscipit facere.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aut recusandae ducimus nihil temporibus. Vitae quo libero qui laudantium iusto quibusdam sed eius sint delectus sit alias in, voluptates voluptatum quos quia quam magni earum dolores totam iure laboriosam optio saepe. Illum, hic delectus harum perferendis veritatis ratione possimus quasi?</p>'
            ],
            [
                'title' => 'Judul Ketiga',
                'category_id' => 1,
                'user_id' => 2,
                'slug' => 'judul_ketiga',
                'author' => 'Dimas',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ratione?',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae magni error, quisquam minima, quo dignissimos id modi quidem possimus quae aut quaerat velit. Aperiam animi quisquam tenetur ullam quis asperiores.</p> <p>Cumque officiis ullam fuga unde libero. Consequuntur, vero corporis, sed repudiandae accusantium ipsa ipsam eligendi unde id suscipit facere.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aut recusandae ducimus nihil temporibus. Vitae quo libero qui laudantium iusto quibusdam sed eius sint delectus sit alias in, voluptates voluptatum quos quia quam magni earum dolores totam iure laboriosam optio saepe. Illum, hic delectus harum perferendis veritatis ratione possimus quasi?</p>'
            ],
            [
                'title' => 'Judul Keempat',
                'category_id' => 2,
                'user_id' => 2,
                'slug' => 'judul_keempat',
                'author' => 'Dimas',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ratione?',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae magni error, quisquam minima, quo dignissimos id modi quidem possimus quae aut quaerat velit. Aperiam animi quisquam tenetur ullam quis asperiores.</p> <p>Cumque officiis ullam fuga unde libero. Consequuntur, vero corporis, sed repudiandae accusantium ipsa ipsam eligendi unde id suscipit facere.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aut recusandae ducimus nihil temporibus. Vitae quo libero qui laudantium iusto quibusdam sed eius sint delectus sit alias in, voluptates voluptatum quos quia quam magni earum dolores totam iure laboriosam optio saepe. Illum, hic delectus harum perferendis veritatis ratione possimus quasi?</p>'
            ]
        ];
        \DB::table('posts')->insert($posts);
    }
}
