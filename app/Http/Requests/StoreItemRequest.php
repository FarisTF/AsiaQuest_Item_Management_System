<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:50',
            'description' => 'required|max:255',
            'stock_quantity' => 'required|digits_between:1,9',
            'price' => 'required|digits_between:1,9',
            'image_url' => 'required|max:255',
        ];
    }
}
