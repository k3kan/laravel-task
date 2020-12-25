<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostPageSeeder extends Seeder
{

    public function run()
    {
        $a = '';

        DB::table('')->insert([
            'name' => '',
            'body' => $a
            ]);
    }
}

