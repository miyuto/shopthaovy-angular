<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id'=>'1',
            'categories_id'=>'10',
            'name'=>'Áo khoác len lông xù kiểu Hàn Quốc',
            'price'=>'450000',
            'discount'=>'20',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'2',
            'categories_id'=>'11',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'3',
            'categories_id'=>'12',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'4',
            'categories_id'=>'13',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'40',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'5',
            'categories_id'=>'10',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'550000',
            'discount'=>'40',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'6',
            'categories_id'=>'11',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'7',
            'categories_id'=>'12',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'60',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'8',
            'categories_id'=>'13',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'600000',
            'discount'=>'20',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'9',
            'categories_id'=>'10',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'1000000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'10',
            'categories_id'=>'11',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'11',
            'categories_id'=>'12',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'12',
            'categories_id'=>'13',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'13',
            'categories_id'=>'10',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'850000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'14',
            'categories_id'=>'11',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'15',
            'categories_id'=>'12',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'16',
            'categories_id'=>'13',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
        DB::table('products')->insert([
            'id'=>'17',
            'categories_id'=>'10',
            'name'=>'Áo len 3 sọc tay dài quyến rũ',
            'price'=>'350000',
            'discount'=>'50',
            'description'=>'Áo khoác len lông xù kiểu Hàn Quốc rất thích hợp để 
            diện trong những ngày thời tiết lạnh, nó có tác dụng giữ ấm cơ thể và giúp 
            trở nên trẻ trung, xinh đẹp hơn với nhiều kiểu dáng khác nhau. 
            Hãy cùng mydeal.vn tham khảo những mẫu áo len xù này cho mình nhé',
            'image_link'=>'images/ao1.jpg',
            'count_view'=>'1',
        ]);
    }
}
