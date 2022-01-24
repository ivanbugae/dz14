<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = [
            ['bug', 'red'],
            ['feature', 'green'],
            ['urgent', 'yellow']
        ];
        foreach ($labels as $label) {
            DB::table('labels')->insert([
                'name' => $label[0],
                'color' => $label[1]
            ]);

        }
    }
}
