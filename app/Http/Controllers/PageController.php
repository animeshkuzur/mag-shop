<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cookie;
use Illuminate\Http\Request;

class PageController extends Controller {

	public function index(Request $request){
		$cookie = Cookie::get('carts');
		$ids = 0; $cart_id = 0;
		if(!$cookie){
			$cart_id = time().mt_rand();
			Cookie::queue('carts',$cart_id,85000);
			\DB::table('carts')->insert(['cookie_id' => $cart_id,]);
			$ids = \DB::table('carts')->where('cookie_id',$cart_id)->get(['id']);
		}
		else{
			$ids = \DB::table('carts')->where('cookie_id',$cookie)->get(['id']);
		}
		foreach ($ids as $id) {
			$cart_id = $id->id;
		}
		$items = \DB::table('cart_items')->where('cart_id',$cart_id)->count();
		return view('pages.index',['items' => $items]);
	}

	public function blog(Request $request){
		$cookie = Cookie::get('carts');
		$ids = 0; $cart_id = 0;
		if(!$cookie){
			$cart_id = time().mt_rand();
			Cookie::queue('carts',$cart_id,85000);
			\DB::table('carts')->insert(['cookie_id' => $cart_id,]);
			$ids = \DB::table('carts')->where('cookie_id',$cart_id)->get(['id']);
		}
		else{
			$ids = \DB::table('carts')->where('cookie_id',$cookie)->get(['id']);
		}
		foreach ($ids as $id) {
			$cart_id = $id->id;
		}
		$items = \DB::table('cart_items')->where('cart_id',$cart_id)->count();
		return view('pages.blog',['items' => $items]);
	}

	public function product($id,Request $request){
		$cookie = Cookie::get('carts');
		$ids = 0; $cart_id = 0;
		if(!$cookie){
			$cart_id = time().mt_rand();
			Cookie::queue('carts',$cart_id,85000);
			\DB::table('carts')->insert(['cookie_id' => $cart_id,]);
			$ids = \DB::table('carts')->where('cookie_id',$cart_id)->get(['id']);
		}
		else{
			$ids = \DB::table('carts')->where('cookie_id',$cookie)->get(['id']);
		}
		foreach ($ids as $ido) {
			$cart_id = $ido->id;
		}
		$items = \DB::table('cart_items')->where('cart_id',$cart_id)->count();
		$data = \DB::table('products')->where('id',$id)->get();
		$images = \DB::table('images')->where('id',$id)->get();
		if($data){
			return view('pages.product',['data' => $data,'images' => $images,'items' => $items]);	
		}
		else{
			return view('errors.503');
		}
		
	}

	public function addproduct(Request $request){
		$cart_id=0;
		$data = $request->only('cookie_id','product_id');
		$check = \DB::table('carts')->where('cookie_id',$data['cookie_id'])->get(['id']);
		if(!$check){
			Cookie::queue('carts',null);
			\DB::table('carts')->where('cookie_id',$data['cookie_id'])->delete();
			return view('error.503');
		}
		foreach ($check as $ch) {
			$cart_id = $ch->id;
		}
		\DB::table('cart_items')->insert([
				'cart_id' => $cart_id,
				'product_id' => $data['product_id'],	
			]);
		$items = \DB::table('cart_items')->where('cart_id',$cart_id)->count();
		$data = \DB::table('products')->where('id',$id)->get();
		$images = \DB::table('images')->where('id',$id)->get();
		if($data){
			return response()->json([
				'data' => $data,
				
				]);
			return view('pages.product',['data' => $data,'images' => $images,'items' => $items]);	
		}
		else{
			return view('errors.503');
		}
	}

	public function notify(Requested $request){
		$data = $request->only('email');

	}

}
