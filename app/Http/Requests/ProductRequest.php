<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'main_price' => "integer", 'sale' => "integer", 'is_stock' => "boolean", 'description' => "string", 'category_id' => 'integer'])] public function rules(): array
    {
        return [
            'name' => 'required',
            'main_price' => 'required',
            'sale' => 'required',
            'is_stock' => '',
            'description' => 'required',
        ];
    }

    #[ArrayShape(['name.required' => "string", 'main_price.required' => "integer",  'sale.required' => "integer",  'is_stock.required' => "boolean", 'description.required' => "string", 'category_id' => 'integer'])] public function messages()
    {
        return [
            'name.required' => 'Обязательно к заполнению',
            'main_price.required' => 'Обязательно к заполнению',
            'sale.required' => 'Обязательно к заполнению',
            'description.required' => 'Обязательно к заполнению',
        ];
    }
}
