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
            "name"=> "required|max:20|min:3"
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Khong duoc de trong!',
            'name.max' => 'Toi da 20 ki tu!',
            'name.min' => 'Toi thieu 6 ki tu',
        ];
    }
}
