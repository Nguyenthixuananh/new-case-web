<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            //
            'category_product_desc'=> "required|string",
            'category_product_desc' => "required|string",
        ];
    }

    public function messages()
    {
        $messages = [
        'category_product_desc.required'=> 'Đừng để trống chỗ có dấu (*)',
        'category_product_desc.required'=> 'Đừng để trống chỗ có dấu (*)    ',

            ];
        return $messages;
    }
}
