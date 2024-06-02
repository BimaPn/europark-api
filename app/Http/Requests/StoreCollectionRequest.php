<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCollectionRequest extends FormRequest
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
            'name' => 'required|min:4|max:30|string',
            'createdBy' => 'required|min:4|max:30',
            'discovery_year' => 'required|min:4|max:30',
            'origin' => 'required|min:3|max:35|string',
            'images' => 'required|array',
            'images.*' => 'required|mimes:jpeg,jpg,png',
            'description' => 'required|min:6|max:5000'
        ];
    }
}
