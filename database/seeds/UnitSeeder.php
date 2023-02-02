<?php

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            [
                'name' => 'unit01', 
                'category_id' => 1, 
                'image_url' => 'https://thearchitectsdiary.com/wp-content/uploads/2021/09/One-Habitat-Studio.jpg', 
                'file_url' => 'test.pdf', 
                'space' => 500, 
                'bedroom_count' => 3, 
                'bathroom_count' => 2, 
                'floor_number' => 2, 
                'price' => 120000, 
                'has_parking' => 1, 
                'is_sunny' => 1, 
                'sold' => 0, 
                'is_public' => 0, 
                'exposure' => 'north', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'unit02', 
                'category_id' => 1, 
                'image_url' => 'https://super.homelane.com/other%20interiors/1636432797157b1a483e96b57-HLKT00000762_resize-800x600_22-main.jpg', 
                'file_url' => 'test.pdf', 
                'space' => 750, 
                'bedroom_count' => 4, 
                'bathroom_count' => 1, 
                'floor_number' => 6, 
                'price' => 100000, 
                'has_parking' => 1, 
                'is_sunny' => 1, 
                'sold' => 0, 
                'is_public' => 0, 
                'exposure' => 'east', 
                'created_at' => now(), 
                'updated_at' => now()
            ]
           
        ];

        Unit::insert($units);
    }
}
