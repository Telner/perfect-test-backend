<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Produto::create([
           'name' => 'asldmkmkds',
           'descricao' => 'asmdslamdlassmdasdsa',
           'preco' => 100,
       ]);

    }
}
