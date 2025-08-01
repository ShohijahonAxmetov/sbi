<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required|min:2|max:255',
            'price' => 'numeric|decimal:2|required|min:0',
            'barcode' => 'string|required|digits:13|starts_with:123456|unique:products',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
