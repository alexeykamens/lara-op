<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'shoes'
        ]);
        DB::table('product_categories')->insert([
            'name' => 'clothes'
        ]);
        DB::table('product_categories')->insert([
            'name' => 'accessories'
        ]);
		
		$ids = DB::table('product_categories')->pluck('id');
		foreach ($ids as $value) {
			$ids2[]=$value;
		}

        for ($i=0; $i < 30; $i++) { 
	       	 DB::table('products')->insert([
	            'category_id' => $ids2[array_rand($ids2)],
	            'name' => str_random(5),
	            'url' => 'images/products/'.($i+1).'/',
	            'price' => mt_rand(100, 10000)/100,
                'description'=>str_random(50),
	        ]);
        }
        
	   

    }
}

