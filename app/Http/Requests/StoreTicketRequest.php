<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:30',
            'email' => 'required|email|string|min:5',
            'whatsapp_number' => 'required|min:8|max:18',
            'identity_card_picture' => 'required|image|max:10000',
            'institute_name' => 'sometimes|required_with:institute_address|string|min:3|max:30',
            'institute_address' => 'sometimes|required_with:institute_name|string|min:4|max:255',
        ];
    }
}
