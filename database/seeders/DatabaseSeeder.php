<?php


use Illuminate\Database\Seeder;
use Database\Seeders\ProdutoSeeder;
use Database\Seeders\ClienteSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProdutoSeeder::class);
        $this->call(ClienteSeeder::class);
    }
}
