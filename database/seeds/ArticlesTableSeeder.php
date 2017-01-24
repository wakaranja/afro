<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $body = file_get_contents('http://loripsum.net/api/10/short/headers');
        $excerpt = file_get_contents('http://loripsum.net/api/1/short');


        DB::table('articles')->insert([
          'title'=>'This is a random title.',
          'body'=>$body,
          'excerpt'=>$excerpt,
          'views'=>rand(0,100),
          'is_draft'=>rand(0,1),
          'is_public'=>rand(0,1),
        ]);
    }
}
