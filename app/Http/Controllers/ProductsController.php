<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateProductRequest;

use App\Category;

use App\Product;

class ProductsController extends Controller
{
	public function create()
	{
		$categories = Category::pluck('name', 'id')->all();
		return view('products.create', ['categories' => $categories]);
	}

	protected function moveImage( $image )
	{
		$name = snake_case($image->getClientOriginalName());
		$image->move('uploads', $name);
		return $name;
	}

	public function store(CreateProductRequest $request)
	{
		$image_one = $this->moveImage($request->image_one);
		$image_two = $this->moveImage($request->image_two);
		$image_three = $this->moveImage($request->image_three);
		$default_image = $this->moveImage($request->default_image);

		$product = Product::create([
			'name' 	=> $request->name,
			'price'	=> $request->price,
			'quantity' => $request->quantity,
			'description' => $request->description,
			'image_one'	=> $image_one,
			'image_two'	=> $image_two,
			'image_three'	=> $image_three,
			'default_image'	=> $default_image			
		]);
		$product->categories()->sync($request->category_list);
		return redirect('products');
	}
	public function index()
	{
		$products = Product::latest()->get();
		return view('products.index', ['products' => $products]);
	}
	public function show ( $id )
	{
		$product = Product::findOrFail( $id );
		return view('products.show', ['product' => $product]);
	}
	public function edit ( $id )
	{
		$product = Product::findOrFail( $id );
		$selected_list = $product->categories()->pluck('id');
		$categories = Category::pluck('name', 'id')->all();
		return view('products.edit', ['product' => $product, 'categories' => $categories, 'selected_list' => $selected_list]);
	}
	public function update ( $id, Request $request)
	{
		$product = Product::findOrFail( $id );
		if($request->image_one == null){
			$one_name = $product->image_one;
		} else {
			$one_name = snake_case($request->image_one->getClientOriginalName());
			$request->image_one->move('uploads', $one_name);
		}
		if($request->image_two == null){
			$two_name = $product->image_two;
		} else {
			$two_name = snake_case($request->image_two->getClientOriginalName());
			$request->image_two->move('uploads', $two_name);
		}
		if($request->image_three == null){
			$three_name = $product->image_three;
		} else {
			$three_name = snake_case($request->image_three->getClientOriginalName());
			$request->image_three->move('uploads', $three_name);
		}
		if($request->default_image == null){
			$default_name = $product->default_image;
		} else {
			$default_name = snake_case($request->default_image->getClientOriginalName());
			$request->default_image->move('uploads', $default_name);
		}
		$product->update([
			'name' 	=> $request->name,
			'price'	=> $request->price,
			'quantity'	=> $request->quantity,
			'description'	=> $request->description,
			'image_one'	=> $one_name,
			'image_two'	=> $two_name,
			'image_three'	=> $three_name,
			'default_image'	=> $default_name
		]);
		$product->categories()->sync($request->category_id);
		return redirect('products');
		
	}
	public function destroy ( $id )
	{
		Product::destroy( $id );
		return redirect('products');
	}
}
