<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            "name" => "required|max:40|min:3|regex:/^[^0-9]*$/",
            "phone" => "required|max:12|min:6|regex:/^[^a-zA-Z\s]*$/",
            "address" => "required|max:120|min:10"
        ];
    }
}
