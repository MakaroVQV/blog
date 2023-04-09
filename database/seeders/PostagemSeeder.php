<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'titulo' => 'primeira postagem',
            'conteudo' => 'primeiro conteudo',
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'segunda postagem',
            'conteudo' => 'segunda conteudo',
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'terceira postagem',
            'conteudo' => 'terceira conteudo',
        ]);
    }
}
