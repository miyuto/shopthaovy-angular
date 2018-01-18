<?php

use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert(
            [
                'id'=>'100',
                'discount_type'=>'Happy New Year',
                'discount_name'=>'phamvanson',
                'discount_ratio'=>'30',
                'allowed_users'=>'50',
                'is_active'=>'1',
                'description'=>'',
                'start_date'=>'2018-03-03 00:00:00',
                'end_date'=>'2018-04-03 00:00:00',
            ]
        );
    }
}
