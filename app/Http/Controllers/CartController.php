<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

use Cart;

class CartController extends Controller
{
	public function index()
	{
		$categories = Category::pluck('name', 'id');
		$items = Cart::getContent();
		$totalamount = Cart::getTotal();
		return view('market.cart', ['items' => $items, 
									'categories' => $categories,
									'totalamount'	=> $totalamount
									]);
	}
    public function addItem(Request $request, $id)
    {
    	$product = Product::findOrFail( $id );
		Cart::add(array(
			  	'id' => $id,
			    'name' => $product->name,
			    'price' => $product->price,
			    'quantity' => $request->quantity,
			    'attributes' => array()
			));
		return redirect()->back();
    }
    public function remove( $id )
    {
    	Cart::remove( $id );
    	return redirect('cart');
    }
    public function clear()
    {
    	Cart::clear();
    	return redirect('cart');
    }
}
