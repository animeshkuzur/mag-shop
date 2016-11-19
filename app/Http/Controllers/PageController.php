<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cookie;
use Illuminate\Http\Request;
use App\Transaction;

class PageController extends Controller {

	public function index(Request $request){
		$cookie = Cookie::get('carts');
		$ids = 0; $cart_id = 0;
		if(!$cookie){
			$cart_id = time().mt_rand();
			Cookie::queue('carts',$cart_id,85000);
			\DB::table('carts')->insert(['cookie_id' => $cart_id]);
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
			\DB::table('carts')->insert(['cookie_id' => $cart_id]);
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
			\DB::table('carts')->insert(['cookie_id' => $cart_id]);
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
			return view('errors.404',['items' => $items]);
		}
		
	}

	public function success($id,Request $request){

	}

	public function fail($id,Request $request){

	}

	public function cancel($id,Request $request){

	}

	public function error(){
		$cookie = Cookie::get('carts');
		$ids = 0; $cart_id = 0;
		if(!$cookie){
			$cart_id = time().mt_rand();
			Cookie::queue('carts',$cart_id,85000);
			\DB::table('carts')->insert(['cookie_id' => $cart_id]);
			$ids = \DB::table('carts')->where('cookie_id',$cart_id)->get(['id']);
		}
		else{
			$ids = \DB::table('carts')->where('cookie_id',$cookie)->get(['id']);
		}
		foreach ($ids as $id) {
			$cart_id = $id->id;
		}
		$items = \DB::table('cart_items')->where('cart_id',$cart_id)->count();
		return view('errors.404',['items' => $items]);
	}

	public function checkout(){
		$cookie = Cookie::get('carts');
		$ids = 0; $cart_id = 0; $price =0;
		if(!$cookie){
			$cart_id = time().mt_rand();
			Cookie::queue('carts',$cart_id,85000);
			\DB::table('carts')->insert(['cookie_id' => $cart_id]);
			$ids = \DB::table('carts')->where('cookie_id',$cart_id)->get(['id']);
		}
		else{
			$ids = \DB::table('carts')->where('cookie_id',$cookie)->get(['id']);
		}
		foreach ($ids as $id) {
			$cart_id = $id->id;
		}
		$items = \DB::table('cart_items')->where('cart_id',$cart_id)->count();
		$data=\DB::select("SELECT p.name,p.price,c.product_id,count(c.product_id) as units FROM products p ,cart_items c WHERE c.cart_id =".$cart_id." AND p.id = c.product_id group by c.product_id");
		foreach($data as $dat){
			$price = $price + ($dat->price*$dat->units);
		}
		return view('pages.checkout',['items' => $items,'price'=>$price]);
	}

	public function notify(Requested $request){
		$data = $request->only('email');

	}

	public function payment(Request $request){
		$this->validate($request, Transaction::$checkout_validation_rules);
		$info = $request->all();
		$cookie = Cookie::get('carts');
		$ids = 0; $cart_id = 0; $price =0; $transaction_id =0;
		if(!$cookie){
			$cart_id = time().mt_rand();
			Cookie::queue('carts',$cart_id,85000);
			\DB::table('carts')->insert(['cookie_id' => $cart_id]);
			$ids = \DB::table('carts')->where('cookie_id',$cart_id)->get(['id']);
			return redirect()->route('/');
		}
		$ids = \DB::table('carts')->where('cookie_id',$cookie)->get(['id']);
		foreach ($ids as $id) {
			$cart_id = $id->id;
		}
		$items = \DB::table('cart_items')->where('cart_id',$cart_id)->count();
		$data=\DB::select("SELECT p.name,p.price,c.product_id,count(c.product_id) as units FROM products p ,cart_items c WHERE c.cart_id =".$cart_id." AND p.id = c.product_id group by c.product_id");
		foreach($data as $dat){
			$price = $price + ($dat->price*$dat->units);
		}
		if($items<1){
			return back()->withInput()->withErrors(['cart' => 'Cannot checkout with an empty cart']);
		}
		$status = \DB::table('transactions')->insert([
				'name' => $info['name'],
				'email' => $info['email'],
				'phone' => $info['phone'],
				'address' => $info['address'],
				'city' => $info['city'],
				'state' => $info['state'],
				'zipcode' => $info['zipcode'],
				'country' => $info['country'],
				'amount' => $price,
				'cookie' => $cookie,
				'paid' => 0,
			]);
		if(!$status){
			return back()->withInput()->withErrors(['cart' => 'Cannot initiate transaction']);
		}
		$tranid = \DB::table('transactions')->where('cookie',$cookie)->get();
		if(!$tranid){
			return back()->withInput()->withErrors(['cart' => 'Cannot find session cookie']);
		}
		foreach($tranid as $tid){
			$transaction_id = $tid->id;
		}
		$product_list = \DB::table('cart_items')->where('cart_id',$cart_id)->get();
		foreach($product_list as $pl){
			\DB::table('transaction_details')->insert([
					'transaction_id' => $transaction_id,
					'product_id' => $pl->product_id,
				]);
		}
		$PAY_URL = "https://test.payu.in/_payment";
		$MERCHANT_KEY = "Ta7HRFYE";
		$productinfo = "Educational Games";
		
		$pay_data = array(
			'key' => $MERCHANT_KEY,
			'txnid' => $transaction_id,
			'amount' => $price,
			'productinfo' => $productinfo,
			'firstname' => $info['name'],
			'address1' => $info['address'],
			'city' => $info['city'],
			'state' => $info['state'],
			'zipcode' => $info['zipcode'],
			'country' => $info['country'],
			'email' => $info['email'],
			'phone' => $info['phone'],
			'surl' => 'https://localhost/xampp/payumoney/success.php',
			'furl' => 'https://localhost/xampp/payumoney/failure.php',
			'curl' => 'https://localhost',
			'service_provider' => $info['service_provider']
			);

		$order = \Indipay::gateway('PayUMoney')->prepare($pay_data);
		return \Indipay::process($order);
	}

}
