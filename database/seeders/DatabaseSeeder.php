<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // inserting reasons data
        $reasons = [
            [
               'reason'=>'Lorem ipsum dolor sit amet',
            ],
            [
               'reason'=>'Lorem ipsum dolor sit amet',
            ],
            [
               'reason'=>'Lorem ipsum dolor sit amet',
            ],
            [
               'reason'=>'Lorem ipsum dolor sit amet',
            ],
            [
               'reason'=>'Lorem ipsum dolor sit amet',
            ],
            [
               'reason'=>'Lorem ipsum dolor sit amet',
            ],
            [
               'reason'=>'Lorem ipsum dolor sit amet',
            ],
        ];
        $reasons_array = [];
        foreach ($reasons as $reason)
        {
            array_push($reasons_array,
                        $reason
                    );
        }
        DB::table('guideline_reasons')->insert($reasons_array);

        // inserting states data
        $states = [
            [
               'state'=>'Maharashtra',
            ],
            [
               'reason'=>'Gujarat',
            ],
            [
               'reason'=>'Madhya Pradesh',
            ],
            [
               'reason'=>'Goa',
            ],
        ];
        $states_array = [];
        foreach ($states as $state)
        {
            array_push($states_array,
                        $state
                    );
        }
        DB::table('states')->insert($states_array);
        \App\Models\User::factory(10)->create();
        \App\Models\Admin::factory()->create();
        \App\Models\SuperApprover::factory()->create();
        \App\Models\Approver::factory()->create();

    }
}
