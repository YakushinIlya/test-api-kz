<?php

namespace Database\Seeders;

use App\Models\CategoriesFilms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesFilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('films')->count();
        CategoriesFilms::factory($count)->create();
    }
}
