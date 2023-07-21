<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Contact::create([
            'type' => 'zapzap',
            'info' => '(47) 991853208',
            'person_id' => 1,
        ]);
        \App\Models\Contact::create([
            'type' => 'E-mail',
            'info' => 'isaquecpbc@gmail.com',
            'person_id' => 1,
        ]);
        \App\Models\Contact::create([
            'type' => 'Celuar',
            'info' => '(47) 3367-6278',
            'person_id' => 1,
        ]);
    }
}
