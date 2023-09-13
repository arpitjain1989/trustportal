<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([
            [
                'id'=>'1',
                'state'=>'Maharshtra'
            ],
            [
                'id'=>'2',
                'state'=>'Goa'
            ],
            [
                'id'=>'3',
                'state'=>'Gujarat'
            ],
            [
                'id'=>'4',
                'state'=>'Madhya Pradesh'
            ]
        ]);
    }
}
