<?php

use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            [
                'title'=>'Whoa, they really opened up!',
                'points'=>5,
                'status'=>1
            ],
            [
                'title'=>'Straight to the point.',
                'points'=>4,
                'status'=>1
            ],
            [
                'title'=>'I didn’t need all of that detail.',
                'points'=>3,
                'status'=>1
            ],
            [
                'title'=>'Way too vague.',
                'points'=>2,
                'status'=>1
            ],
            [
                'title'=>'Wow….they refused to answer the question.',
                'points'=>1,
                'status'=>1
            ]
        ];
                
        Option::insert($options);
    }
}
