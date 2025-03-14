<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|nullable|max:255',
            'sku' => 'sometimes|string|unique:products,sku,' . $this->route('id') . '|max:100',
            'price' => 'sometimes|numeric|min:0',
            'category_id' => 'sometimes|integer|exists:categories,id',
        ];
    }
}
