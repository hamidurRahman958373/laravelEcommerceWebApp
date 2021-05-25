<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
           [
               'name'=>'Samsung RS72R5011B4',
                'price'=>'1,45,000',
                'category'=>'fridge',
                'discription'=>'Make sure that all your food is properly cooled –
                wherever it is in the fridge. An All-around Cooling system continually
                checks the temperature and blows out cold air',
                'gallery'=>'https://5.imimg.com/data5/SH/JU/MY-2341017/samsung-side-by-side-refrigerator-500x500.jpg',
           ]

       ]);
    }
}