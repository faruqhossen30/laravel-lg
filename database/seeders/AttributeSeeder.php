<?php

namespace Database\Seeders;

use App\Models\Admin\Attribute\Color;
use App\Models\Admin\Attribute\Size;
use App\Models\Admin\Attribute\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = ['Red', 'Green', 'Blue', 'Orange', 'Tomato','Yellow','white'];
        $sizes = ['S','M','L','XL','XXL','XXL'];
        $tags = array(
            "Leather Goods",
            "Leather Accessories",
            "Genuine Leather",
            "Leather Bags",
            "Leather Wallets",
            "Leather Shoes",
            "Leather Jackets",
            "Leather Belts",
            "Leather Gloves",
            "Leather Care Products",
            "Handcrafted Leather",
            "Luxury Leather",
            "Leather Gifts",
            "Exotic Leather",
            "Leather Briefcases",
            "Leather Backpacks",
            "Leather Watch Straps",
            "Leather Furniture",
            "Leather Care and Maintenance",
            "Leather Craft Supplies"
        );

        foreach($colors as $color){
            Color::create([
                'name'=> $color,
                'code'=> '#0000',
                'author_id'=>1
            ]);
        }

        foreach($sizes as $size){
            Size::create([
                'name'=> $size,
                'author_id'=>1
            ]);
        }
        foreach($tags as $tag){
            Tag::create([
                'name'=> $tag
            ]);
        }

    }
}
