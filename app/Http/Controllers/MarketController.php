<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Product;

use Cart;

class MarketController extends Controller
{
	protected $categories;

	public function __construct()
	{
		$this->categories = Category::pluck('name', 'id');
	}
    public function index()
    {
    	$products = Product::all();
    	return view('market.index', 
    			['categories' => $this->categories, 'products' => $products]);
    }
    public function showDetails( $id )
    {
    	$product = Product::findOrFail( $id );
       	return view('market.product_details',[
    				'categories' => $this->categories, 
    				'product' => $product,
    			]);
    }
    public function showProducts( $id )
    {
    	$categories = Category::pluck('name', 'id');
    	$category = Category::findOrFail( $id );
    	$products = $category->products->all();
    	return view('market.show_products',[
    				'categories' => $this->categories,
    				'products' => $products
    			]);
    }
}
