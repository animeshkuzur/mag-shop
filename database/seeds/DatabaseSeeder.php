<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Image;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('ProductTableSeeder');
		$this->call('ImageTableSeeder');

		// $this->call('UserTableSeeder');
	}

}

class ProductTableSeeder extends Seeder {

    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'SHORES',
        	'category' => 'Board Games',
        	'concept' => '2D Co-ordinate Geometry',
        	'description' => 'Ocean theme based board game 16 Ships, 1 Compass, 4 packs of cones, 40 Mints and Rule book inside the box. Sharpens analytical and decision making skills. Perfect game for Math Learning. Bridges jump from one dimensional movement on number line to the two dimensional movement in a plane. Theme based games with compelling story line to help build imagination. Used by best schools and parents to develop positive attitude towards Mathematics among students.',
        	'players' => '2-4',
        	'duration' => '30-45 mins',
        	'age' => '8 years and above',
        	'dimensions' => '42cm X 19.5cm X 5cm',
        	'price' => '700.00',
        	'units' => 10,
        ]);

        DB::table('products')->insert([
        	'name' => 'TUM YUM',
        	'category' => 'Card Games',
        	'concept' => 'Integers and Integer Operations',
        	'description' => 'Perfect game for anyone who wants to develop mathematical operational skills. Sharpens analytical and decision making skills. Theme based games with characters and story line to help build imagination. Used by best schools and parents to develop positive attitude towards Mathematics among students.',
        	'players' => '2',
        	'duration' => '15-20 minutes',
        	'age' => '8 years and above',
        	'dimensions' => '25cm X 11cm X 2.5cm',
        	'price' => '400.00',
        	'units' => 10,
        ]);
    }
}

class ImageTableSeeder extends Seeder{
	public function run()
	{
		DB::table('images')->insert([
			'product_id' => '1',
			'image_1' => 'product1_1.JPG',
			'image_2' => 'product1_2.JPG',
			'image_3' => 'product1_3.JPG',
		]);

		DB::table('images')->insert([
			'product_id' => '2',
			'image_1' => 'product2_1.JPG',
			'image_2' => 'product2_2.JPG',
			'image_3' => 'product2_3.JPG',
		]);
	}
}