<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// quando uso i seeder ricordarmi di usare sempre il model e importalrlo
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsList = config("comics");
        foreach ($comicsList as $comic){
            $comic = new Comic();
            $comic->title = $comic["title"];
            $comic->description = $comic["description"];
            $comic->thumb = $comic["thumb"];
            $comic->series = $comic["series"];
            $comic->sale_date = $comic["sale_date"];
            $comic->save();
        }

    }
}
