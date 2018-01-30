<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'description' => 'required',
            'category_list' => 'required|array|min:1',
            'image_one' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_two' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_three' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'default_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
