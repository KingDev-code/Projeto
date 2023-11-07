<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'sobrenome' => ['string', 'max:255'],
            'datanasc' => ['date'], // Em vez de 'string', alterado para 'date'
            'email' => [
                'email',
                'max:255',
                Rule::unique('logins', 'email')->ignore($this->user()->login->id), // Usar 'logins' e ignorar o email atual do usuário
            ],
        ];
    }

}
