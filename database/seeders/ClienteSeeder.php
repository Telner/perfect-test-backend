<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'name' => 'jose',
            'email' => 'jose@pay.br',
            'cpf' => '12418716545',
        ]);

    }
}
