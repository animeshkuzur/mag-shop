<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cookie;
use Illuminate\Http\Request;

class CartController extends Controller {

	public function getproducts(){
		$cart_id=0; $items =0;
		$cookie = Cookie::get('carts');
		if($cookie){
			$check = \DB::table('carts')->where('cookie_id',$cookie)->get(['id']);
			if(!$check){
				Cookie::queue('carts',null);
				return response()->json(['error' => 'cookie expired']);
			}
			foreach ($check as $ch) {
				$cart_id = $ch->id;
			}
			$data=\DB::select("SELECT p.name,p.price,c.product_id,count(c.product_id) as units FROM products p ,cart_items c WHERE c.cart_id =".$cart_id." AND p.id = c.product_id group by c.product_id");
			if($data){
				return response()->json(['data' => $data]);
			}
			else{
				return response()->json(['error' =>0]);
			}
		}
		else{
			return response()->json(['error' => 'cookie not set']);
		}
	}

	public function addproduct(Request $request){
		$cart_id=0; $items =0;
		$cookie = Cookie::get('carts');
		$rdata = $request->all();
		//return $product_id['product_id'];
		if($cookie){
			$check = \DB::table('carts')->where('cookie_id',$cookie)->get(['id']);
			if(!$check){
				Cookie::queue('carts',null);
				return response()->json(['error' => 'cookie expired']);
			}
			foreach ($check as $ch) {
				$cart_id = $ch->id;
			}
			\DB::table('cart_items')->insert([
					'cart_id' => $cart_id,
					'product_id' => $rdata['product_id'],	
				]);
			$items = \DB::table('cart_items')->where('cart_id',$cart_id)->count();
			return $items;
		}
		else{
			return response()->json(['error' => 'cookie not set']);
		}
	}

	public function deleteproduct($id){
		$cookie = Cookie::get('carts');
		if($cookie){
			$check = \DB::table('carts')->where('cookie_id',$cookie)->get(['id']);
			if(!$check){
				Cookie::queue('carts',null);
				return response()->json(['error' => 'cookie expired']);
			}
			foreach ($check as $ch) {
				$cart_id = $ch->id;
			}
			\DB::table('cart_items')->where('product_id',$id)->delete();
			$data=\DB::select("SELECT p.name,p.price,c.product_id,count(c.product_id) as units FROM products p ,cart_items c WHERE c.cart_id =".$cart_id." AND p.id = c.product_id group by c.product_id");
			$items = \DB::table('cart_items')->where('cart_id',$cart_id)->count();
			return response()->json(['data' => $data,'items'=>$items]);
		}
		else{
			return response()->json(['error' => 'cookie not set']);
		}
	}

}
