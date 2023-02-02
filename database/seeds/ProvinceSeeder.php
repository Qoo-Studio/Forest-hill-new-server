<?php

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ["id" => 2, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "آذربایجان شرقی"],
            ["id" => 3, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "آذربایجان غربی"],
            ["id" => 4, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "اردبیل"],
            ["id" => 5, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "اصفهان"],
            ["id" => 6, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "البرز"],
            ["id" => 7, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "ایلام"],
            ["id" => 8, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "بوشهر"],
            ["id" => 9, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "تهران"],
            ["id" => 10, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "چهار محال و بختیاری"],
            ["id" => 11, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "خراسان جنوبی"],
            ["id" => 12, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "خراسان رضوی"],
            ["id" => 13, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "خراسان شمالی"],
            ["id" => 14, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "خوزستان"],
            ["id" => 15, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "زنجان"],
            ["id" => 16, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "سمنان"],
            ["id" => 17, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "سیستان و بلوچستان"],
            ["id" => 18, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "فارس"],
            ["id" => 19, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "قزوین"],
            ["id" => 20, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "قم"],
            ["id" => 21, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "کردستان"],
            ["id" => 22, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "کرمان"],
            ["id" => 23, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "کرمانشاه"],
            ["id" => 24, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "کهگیلویه و بویراحمد"],
            ["id" => 25, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "گلستان"],
            ["id" => 26, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "گیلان"],
            ["id" => 27, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "لرستان"],
            ["id" => 28, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "مازندران"],
            ["id" => 29, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "مرکزی"],
            ["id" => 30, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "هرمزگان"],
            ["id" => 31, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "همدان"],
            ["id" => 32, "created_at" => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s'), "name" => "یزد"],
        ];

        Province::insert($provinces);
    }
}
