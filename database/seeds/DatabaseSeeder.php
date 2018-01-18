<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>'1',
            'name'=>'Pham Van Son',
            'email'=>'admin@email.com',
            'password'=>bcrypt('123456'),
            'authority'=>'1',
        ]);
        DB::table('users')->insert([
            'id'=>'2',
            'name'=>'Pham Van Son',
            'email'=>'customer@email.com',
            'password'=>bcrypt('123456'),
            'authority'=>'0',
        ]);

        DB::table('customers')->insert(
            [
                'id'=>'1',
                'user_id'=>'1',
                'full_name'=>'Phạm Văn Sơn',
                'sex'=>'Nam',
                'birthday'=>'1992-07-16',
                'phone'=>'0983807784',
                'address1'=>'Huyện Thạch Thành tỉnh Thanh Hóa',
                'address2'=>'Số nhà 10 Khu I trị trấn Kim Tân',
            ]);
        DB::table('slides')->insert(
          [
              'id'=>'100',
              'link_image'=>'images/sliders/anh1.png',
              'description'=>'Slide Image',
          ]
        );
        DB::table('slides')->insert(
            [
                'id'=>'101',
                'link_image'=>'images/sliders/anh2.png',
                'description'=>'Slide Image',
            ]
        );
    }
}
