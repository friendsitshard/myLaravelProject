<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ];


    }

    public function messages()
    {
        return [
            'name.required' => 'Shen debili xoarxar bicho saxeli rogor shegeshala.',
            'email.required' => 'Vigacas sul aviwydeba maili.',
            'email.email' => 'Sworad chawere shtero.',
            'password.required' => 'Chawere paroli zma.',
            'password.min' => '6ze meti unda iyos.',
            'confirm_password.required' => 'The confirm password field is required.',
            'confirm_password.same' => 'The confirm password must match the password.',
        ];
    }
}
