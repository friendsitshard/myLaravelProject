<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePictureRequest extends FormRequest
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
            'image' => 'required|image|max:2048',
        ];

    }

    public function messages()
    {
        return [
            'picture.required' => 'iseti maxinji xar ro foto ver atvirte?',
            'picture.image' => 'foto tqo sheni...',
            'picture.max' => '2mb-ze meti ar chaeteva zma'
        ];
    }
}
