<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlutterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('flutter_models')->insert([
        'name'=>'Johan Doe',
        'email'=>'johan@gmail.com',
        'password'=>'123456'
    ]);
    }
}
