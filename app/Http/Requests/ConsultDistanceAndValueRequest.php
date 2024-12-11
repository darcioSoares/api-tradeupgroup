<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultDistanceAndValueRequest extends FormRequest
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
            'cep_origin' => ['required', 'regex:/^[0-9]{8}$/'],
            'cep_destination' => ['required', 'regex:/^[0-9]{8}$/']
        ];
    }

    public function messages(): array
    {
        return [
            'cep_origin.required' => 'O campo CEP é obrigatório.',
            'cep_origin.regex' => 'O CEP deve conter exatamente 8 números.',
            'cep_destination.required' => 'O campo CEP é obrigatório.',
            'cep_destination.regex' => 'O CEP deve conter exatamente 8 números.',
        ];
    }
}
