<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'山田太郎',
                'email'=>'adfsfudsjbjv5@fdsyhbvh',
                'password'=>'fbjkasdhfkjas',
                'age'=>25,
                'sex'=>'man',
                'image'=>'a',
                'Music'=>'Piano',
                'address'=>'Tokyo',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'山田次郎',
                'email'=>'cde345asdyfhjsdb@dyufagjdsbfa',
                'password'=>'deffsdagfask',
                'age'=>35,
                'sex'=>'man',
                'image'=>'b',
                'Music'=>'Guiter',
                'address'=>'Osaka',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'山田花子',
                'email'=>'adeysdghsdads@yudsgfhjbsd',
                'password'=>'sdfhisdeywgfbweshj',
                'age'=>35,
                'sex'=>'woman',
                'image'=>'c',
                'Music'=>'Violin',
                'address'=>'Okinawa',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            ]);
    }
}
