<?php

namespace Libro\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $listalibros = DB::select('select * from libros');
        return view('resources.views.home.index',['libros'=>$listalibros]);
    }
}
