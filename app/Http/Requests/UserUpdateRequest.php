<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'hobbies' => 'required|array|max:5',
            'hobbies.*' => 'sometimes|string'
        ];
    }

    public function messages()
    {
        return [
            'hobbies.required' => 'Unda iyos hobbi bicho',
            'hobbies.max' => '5 unda iyos zma',
            'hobbies.*.string' => 'striqoni ici?'
        ];
    }
}
