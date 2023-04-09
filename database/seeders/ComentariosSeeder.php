<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentarios')->insert([
            'postagem_id' => 1,
            'conteudo' => 'primeira postagem - primeiro conteudo',
        ]);

        DB::table('comentarios')->insert([
            'postagem_id' => 2,
            'conteudo' => 'segunda postagem - segundo conteudo',
        ]);

        DB::table('comentarios')->insert([
            'postagem_id' => 3,
            'conteudo' => 'terceira postagem - terceiro conteudo',
        ]);
    }
}
