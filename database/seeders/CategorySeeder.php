<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Kriminal',
                'slug' => 'kriminal',
            ],
            [
                'name' => 'Politik dan Hukum',
                'slug' => 'politik',
            ],
            [
                'name' => 'Sains Teknologi',
                'slug' => 'teknologi',
            ],
            [
                'name' => 'Infotainment',
                'slug' => 'infotainment',
            ],
            [
                'name' => 'Ekonomi',
                'slug' => 'ekonomi',
            ],
            [
                'name' => 'Olahraga',
                'slug' => 'olahraga',
            ]
        ];
        \DB::table('categories')->insert($categories);
    }
}
