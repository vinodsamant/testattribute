<?php

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [   
                'category_id'=>1,
                'title'=>'Are you a morning person or a night owl?',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>'What is your favourite type(s) of food?',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>'Favourite kind of vacation?',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>'Favourite type of movies? Then list top 3 fav movies of all time.',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>'Do you prefer indoor or outdoor? Then what do you like indore/outdoor?',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>'If you  had $25,000, what would you do with it?',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>'What is the last show you binge-watched?',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>'What is your favorite season and why?',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>'What you an introvert or extrovert?',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>'What you have any phobias?',                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>"Do you have social media and if so, what's your favorite app?",                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>"What are three things you can't leave the house without?",                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>"Do you smoke, dip or vape?",                
                'status'=>1
            ],
            [
                'category_id'=>1,
                'title'=>"Are you dog or cat person?",                
                'status'=>1
            ]                    
        ];

        Question::insert($questions);
    }
}
