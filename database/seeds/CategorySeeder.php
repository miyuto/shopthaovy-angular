<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'id'=>'10',
                'name'=>'Thời trang nam',
                'parent_id'=>'1',
            ]
        );
        DB::table('categories')->insert(
            [
                'id'=>'11',
                'name'=>'Thời trang nữ',
                'parent_id'=>'2',
            ]
        );
        DB::table('categories')->insert(
            [
                'id'=>'12',
                'name'=>'Mỹ phẩm',
                'parent_id'=>'3',
            ]
        );
        DB::table('categories')->insert(
            [
                'id'=>'13',
                'name'=>'Túi xách',
                'parent_id'=>'4',
            ]
        );
    }
}
