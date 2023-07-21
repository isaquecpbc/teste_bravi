<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Person::create([
            'name' => 'Dev testador',
            'description' => 'Apenas um bom dev, testando suas codações.',
        ]);
        \App\Models\Person::create([
            'name' => 'BoJack Horseman',
            'description' => 'BoJack Horseman, um cavalo humanoide, busca um retorno a Hollywood anos depois de sua fama como estrela de uma sitcom nos anos 1990',
        ]);
        \App\Models\Person::create([
            'name' => 'Anakin Skywalker',
            'description' => 'Darth Vader é um personagem fictício da franquia Star Wars. O personagem é o antagonista central da trilogia original e, como Anakin Skywalker, é um dos principais protagonistas de toda a trilogia prequela.',
        ]);
    }
}
