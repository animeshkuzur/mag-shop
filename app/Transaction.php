<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {

	protected $fillable = ['name', 'email', 'address','phone','city','state','zipcode','country','amount','paid'];

    public $timestamps = true;

	public static $checkout_validation_rules = [
		'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'phone' => 'required|min:10|max:13',
        'city' => 'required',
        'state' => 'required',
        'zipcode' => 'required',
        'country' => 'required'
    ];

}
