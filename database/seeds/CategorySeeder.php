<?php

use App\Models\Category;
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
                'name' => 'building', 
                'flag' => 1, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'shopping', 
                'flag' => 0, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'education', 
                'flag' => 0,  
                'created_at' => now(), 
                'updated_at' => now()
            ]
        ];

        Category::insert($categories);
    }
}
