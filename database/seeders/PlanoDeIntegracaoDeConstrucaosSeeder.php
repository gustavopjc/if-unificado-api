<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Subtitulos;
use App\Models\Templates;
use App\Models\Titulo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PlanoDeIntegracaoDeConstrucaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Templates::create([
            'nome' => 'Plano de Integração de Construção',
            'slug' => 'plano_de_integracao_de_construcao',
            'fase_id' => Fase::where('slug', 'implementacao')->first()->id,
        ]);

        Titulo::create([
            'nome' => 'Introdução',
            'slug' => 'introducao',
            'ordem' => 1,
            'template_id' => Templates::where('slug', 'plano_de_integracao_de_construcao')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Subsistemas',
            'slug' => 'subsistemas',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'plano_de_integracao_de_construcao')->first()->id,
        ]);
        Titulo::create([
            'nome' => 'Builds',
            'slug' => 'builds',
            'ordem' => 2,
            'template_id' => Templates::where('slug', 'plano_de_integracao_de_construcao')->first()->id,
        ]);



        Subtitulos::create([
            'nome' => 'Objetivo',
            'slug' => 'objetivo',
            'ordem' => 1,
            'titulo_id' => 32,
        ]);
        Subtitulos::create([
            'nome' => 'Escopo',
            'slug' => 'escopo',
            'ordem' => 2,
            'titulo_id' => 32,
        ]);
        Subtitulos::create([
            'nome' => 'Definições, acrônimos e abreviações',
            'slug' => 'definicoes_acronimos_abreviacoes',
            'ordem' => 3,
            'titulo_id' => 32,
        ]);
        Subtitulos::create([
            'nome' => 'Referências',
            'slug' => 'referencias',
            'ordem' => 4,
            'titulo_id' => 32,
        ]);

        Subtitulos::create([
            'nome' => 'Visão Geral',
            'slug' => 'visao_geral',
            'ordem' => 5,
            'titulo_id' => 32,
        ]);




        Model::reguard();
    }
}
