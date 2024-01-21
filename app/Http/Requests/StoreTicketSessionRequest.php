<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketSessionRequest extends FormRequest
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
            "visit_date" => "required|date",
            "schedule_id" => "required|integer",
            "quantities" => "required|array",
            "quantities.*.id" => "required|integer",
            "quantities.*.quantity" => "required|integer",
        ];
    }
}
