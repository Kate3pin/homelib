<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Genre::class, 1)->states('fable')->create();
        factory(App\Genre::class, 1)->states('ballad')->create();
        factory(App\Genre::class, 1)->states('epic')->create();
        factory(App\Genre::class, 1)->states('detective')->create();
        factory(App\Genre::class, 1)->states('comedy')->create();
        factory(App\Genre::class, 1)->states('melodrama')->create();
        factory(App\Genre::class, 1)->states('myth')->create();
        factory(App\Genre::class, 1)->states('feature article')->create();
        factory(App\Genre::class, 1)->states('science fiction')->create();
        factory(App\Genre::class, 1)->states('novella')->create();
        factory(App\Genre::class, 1)->states('poem')->create();
        factory(App\Genre::class, 1)->states('fairy tale')->create();
        factory(App\Genre::class, 1)->states('novel')->create();
        factory(App\Genre::class, 1)->states('tragedy')->create();
        factory(App\Genre::class, 1)->states('epic')->create();
        factory(App\Genre::class, 1)->states('elegy')->create();
    }
}
