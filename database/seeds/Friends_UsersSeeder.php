<?php


use Illuminate\Database\Seeder;

class Friends_UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::factory(100)->create();
        
    }
}
