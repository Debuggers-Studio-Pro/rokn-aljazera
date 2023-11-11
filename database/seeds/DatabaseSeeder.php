<?php

use Illuminate\Database\Seeder;
use Database\Seeders\TaxonomySeeder;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      $this->call(TaxonomySeeder::class);
      $this->call(RoleTableSeeder::class);
      $this->call(UserTableSeeder::class);
   }
}
