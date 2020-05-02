<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'title'=>'The Basics',
                'description'=>'The basic, fun questions we all want to know.',
                'status'=>1
            ],
            [
                'title'=>"It's Not a Habit, It's a Hobby.",
                'description'=>"The basic, fun questions we all want to know.",
                'status'=>1
            ],
            [
                'title'=>'I Know What I Want.',
                'description'=>'The basic, fun questions we all want to know.',
                'status'=>1
            ]
        ];
        
        Category::insert($category);
    }
}
