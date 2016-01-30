<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::table('categories')->delete();
        //Insert Mail Catagories
        DB::table('categories')->insert([
          'name' => 'จดหมายทางการ',
          'description' => 'จดหมายที่เป็นทางการสำหรับการส่งในสำนักงาน',
          'picture_url' => 'mailcat/mailcat1.png'
        ]);
        DB::table('categories')->insert([
          'name' => 'จดหมายทั่วไป',
          'description' => 'จดหมายที่เป็นสำหรับการส่งทั่วไป',
          'picture_url' => 'mailcat/mailcat2.png'
        ]);


        DB::table('mailtypes')->delete();
        //Insert Mail Catagories
        DB::table('mailtypes')->insert([
          'name' => 'จดหมายธุรกิจ',
          'description' => 'จดหมายธุรกิจ',
          'picture_url' => 'mailtype/mailtype1.png',
          'price' => 10,
          'width' => 500,
          'height' => 700,
          'category_id' => DB::table('categories')->where('name', 'จดหมายทางการ')->first()->id
        ]);
        DB::table('mailtypes')->insert([
          'name' => 'จดหมายเชิญ',
          'description' => 'จดหมายเชิญ',
          'picture_url' => 'mailtype/mailtype2.png',
          'price' => 20,
          'width' => 500,
          'height' => 700,
          'category_id' => DB::table('categories')->where('name', 'จดหมายทางการ')->first()->id
        ]);
        //Insert Mail Catagories
        DB::table('mailtypes')->insert([
          'name' => 'จดหมายให้เพื่อน',
          'description' => 'จดหมายให้เพื่อน',
          'picture_url' => 'mailtype/mailtype1.png',
          'price' => 10,
          'width' => 500,
          'height' => 700,
          'category_id' => DB::table('categories')->where('name', 'จดหมายทั่วไป')->first()->id
        ]);
        DB::table('mailtypes')->insert([
          'name' => 'จดหมายรัก',
          'description' => 'จดหมายรัก',
          'picture_url' => 'mailtype/mailtype2.png',
          'price' => 20,
          'width' => 500,
          'height' => 700,
          'category_id' => DB::table('categories')->where('name', 'จดหมายทั่วไป')->first()->id
        ]);

        // Model::reguard();
    }
}
