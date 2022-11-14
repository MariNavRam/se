<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
class OrdenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordenes')->insert([

        'id'=>'1',
        'nombre'=> 'Ciconiformes',
        ]);

        DB::table('ordenes')->insert([

            'id'=>'2',
            'nombre'=> 'Falconiformes',
            ]);
            DB::table('ordenes')->insert([

                'id'=>'3',
                'nombre'=> 'Columbiformes',
            ]);
            DB::table('ordenes')->insert([

                'id'=>'4',
                'nombre'=> 'Psittaciformes',
                ]);
                DB::table('ordenes')->insert([

                    'id'=>'5',
                    'nombre'=> 'Cuculiformes',
                ]);
                DB::table('ordenes')->insert([

                    'id'=>'6',
                    'nombre'=> 'Strigiformes'
                    ]);
                    DB::table('ordenes')->insert([

                        'id'=>'7',
                        'nombre'=> 'Caprimulgiformes',
                        ]);
       DB::table('ordenes')->insert([

       'id'=>'8',
       'nombre'=> 'Apodriformes',
        ]);
        DB::table('ordenes')->insert([

            'id'=>'9',
            'nombre'=> 'Coraciiformes',
            ]);
            DB::table('ordenes')->insert([

                'id'=>'10',
                'nombre'=> 'Piciformes',
                ]);
                DB::table('ordenes')->insert([

                    'id'=>'11',
                    'nombre'=> 'Paserifornes',
                    ]);

    }
}
