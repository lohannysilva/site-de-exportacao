<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            [
                'nome' => 'Batman',
                'preco' => 80,
                'cor' => '',
                'tamanho' => '40cm',
                'descricao' => 'Linha Amigurumi (círculo)',
                'image' => asset('img/batman.jpg'),
            ],
            [
                'nome' => 'Marca-páginas (Rato)',
                'preco' => '30',
                'cor' => '',
                'tamanho' => '20cm',
                'descricao' => 'Linha Amigurumi (círculo)',
                'image' => asset('img/feia.jpg'),
            ],
            [
                'nome' => 'Princesa Branca de Neve',
                'preco' => '120',
                'cor' => '',
                'tamanho' => '40cm',
                'descricao' => 'Linha Amigurumi Maxi (círculo)',
                'image' => asset('img/boneco.jpg'),
            ],
            [
                'nome' => 'Porquinho',
                'preco' => '50',
                'cor' => '',
                'tamanho' => '15cm',
                'descricao' => 'Linha Amigurumi Soft (círculo)',
                'image' => asset('img/porco.jpg'),
            ],
            [
                'nome' => 'Vaquinha',
                'preco' => '80',
                'cor' => '',
                'tamanho' => '40cm',
                'descricao' => 'Linha Amigurumi Pelúcia (círculo)',
                'image' => asset('img/boi.jpg'),
            ],
            [
                'nome' => 'Dinossauro',
                'preco' => '50',
                'cor' => '',
                'tamanho' => '30cm',
                'descricao' => 'Linha Amigurumi Soft (círculo)',
                'image' => asset('img/dino.jpg'),
            ],
            [
                'nome' => 'Hello Kitty',
                'preco' => '50',
                'cor' => '',
                'tamanho' => '30cm',
                'descricao' => 'Linha Amigurumi (círculo)',
                'image' => asset('img/hello.jpg'),
            ],
            [
                'nome' => 'Água-viva',
                'preco' => '50',
                'cor' => '',
                'tamanho' => '30cm',
                'descricao' => 'Linha Amigurumi (círculo)',
                'image' => asset('img/coisa.jpg'),
            ],
            [
                'nome' => 'Tonny Stark (Homem de Ferro)',
                'preco' => '120',
                'cor' => '',
                'tamanho' => '40cm',
                'descricao' => 'Linha Amigurumi Pelúcia (círculo)',
                'image' => asset('img/homem-de-ferro.jpg'),
            ],
        ]);
    }
}



