<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new \App\Blog();
        $blog->id = 1;
        $blog->title = "Tạo project";
        $blog->content = "Tạo project Laravel adasdhashdhahdja";
        $blog->author = "abcde";
        $blog->image  = "";
        $blog->save();

        $blog = new \App\Blog();
        $blog->id = 2;
        $blog->title = "adlsakldksal;";
        $blog->content = "fasfsadfsadfhsafhsahfjhsjakhfsafssaf";
        $blog->author = "koklkd";
        $blog->image  = "";
        $blog->save();

    }
}
