<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\UuidTrait;
use App\Models\User;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{   
    use UuidTrait;
    private $uuid;

    public function __construct(Request $request)
    {
        /*Get UUID*/
        $this->uuid = $this->generate_uuid();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'uuid'  => $this->uuid,
            'fname' => 'Admin',
            'lname' => 'Admin',
            'email' => 'threedegree2020@gmail.com',
            'password' => Hash::make('Admin@123'),
            'gender' => 'male',
            'age' => 25,
            'role' => 1,  // 1=>Admin, 2=>Customer
            'status' => 1,
            'is_verified' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'is_logged_in' => 0
        ]);
    }
}
