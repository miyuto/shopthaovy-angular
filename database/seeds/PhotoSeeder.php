<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert(
            [
                'id'=>'1',
                'products_id'=>'1',
                'link'=>'/images/anhcon1.jpg',
                'description'=>'',
            ]
        );
        DB::table('photos')->insert(
            [
                'id'=>'2',
                'products_id'=>'1',
                'link'=>'/images/anhcon2.jpg',
                'description'=>'',
            ]
        );
        DB::table('photos')->insert(
            [
                'id'=>'3',
                'products_id'=>'1',
                'link'=>'/images/anhcon3.jpg',
                'description'=>'',
            ]
        );
        DB::table('photos')->insert(
            [
                'id'=>'4',
                'products_id'=>'1',
                'link'=>'/images/anhcon4.jpg',
                'description'=>'',
            ]
        );
        DB::table('photos')->insert(
            [
                'id'=>'5',
                'products_id'=>'1',
                'link'=>'/images/anhcon5.jpg',
                'description'=>'',
            ]
        );
    }
}
