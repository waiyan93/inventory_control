<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateCategoryRequest;

use App\Category;

class CategoriesController extends Controller
{
    public function create()
    {
    	return view('categories.create');
    }

    public function store(CreateCategoryRequest $request) 
    {
    	Category::create( $request->all() );
    	return redirect('categories'); 
    }

    public function index()
    {
    	$categories = Category::all();
    	return view('categories.index', ['categories' => $categories]);
    }

    public function show( $id )
    {
        $category = Category::findOrFail( $id );
        return view('categories.show', ['category' => $category]);
    }

    public function edit( $id )
    {
        $category = Category::findOrFail( $id );
        return view('categories.edit', ['category' => $category]);
    }

    public function update( $id, CreateCategoryRequest $request)
    {
        $category = Category::findOrFail( $id );
        $category->update( $request->all() );
        return redirect('categories');
    }

    public function destroy( $id )
    {
       Category::destroy($id);
       return redirect('categories');
    }
}
