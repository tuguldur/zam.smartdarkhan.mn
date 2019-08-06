<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'ДОНЗТ-ЦАХИМ САН';
        $user->email = 'smartcity.gov@gmail.com';
        $user->password = bcrypt('Password');
        $user->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $user->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $user->save();
    }
}
