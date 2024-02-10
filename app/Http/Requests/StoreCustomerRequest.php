<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            "motelName" => "required|string",
            "razonSocial" => "required|string",
            "personaContacto" => "required|string",
            "email" => "required|email",
            "country" => "required|string",
            "state" => "required|string",
            "city" => "required|string",
            "colony" => "required|string",
            "street" => "required|string",
            "exteriorNumber" => "required|string",
            "interiorNumber" => "required|string",
            "reference" => "required|file",
            // "administrative" => "required|checkbox",
            "name" => "required|string",
            "description" => "required|string",
            "cost" => "required|numeric",
            "date" => "required|date|date_format:Y-m-d"
            
        ];
    }
    // public function messages()
    // {
    //     return[
    //         'name.required' => 'The name field is required.'
    //     ];
    // }
    public function attributes()
    {
        return[
            'motelName' => 'nombre del motel',
            'colony' => 'colonia',
            'reference' => 'referencia',
            'cost' => 'cost',
        ];
    }
}
