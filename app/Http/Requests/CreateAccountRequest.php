<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'sometimes|string'
        ];
    }

    public function prepareForValidation()
    {
        if ($this->has('password') && !empty($this->password)) {
            $this->merge([
                'password' => Hash::make($this->password)
            ]);
        }
    }
}
