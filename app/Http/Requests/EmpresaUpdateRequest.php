<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'resp' => 'required|string|max:255',
            'cnpj' => 'required|string|max:18|unique:empresas,cnpj,' . $this->user()->id,
            'telefone' => 'required|string|max:20',
            'data_fundacao' => 'required|date',
            'email' => 'required|email|unique:empresas,email,' . $this->user()->id,
        ];
    }
}
