<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'items' => 'required|array|min:1',
            'items..product_id' => 'required|integer',
            'items..quantity' => 'required|integer',
            'items..options' => 'required|array|min:1',
            'items..options.*' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'items.required' => 'sia sheavse zma',
            'items.min' => '1 mainc iyos bijoo',
            'items..product_id.required' => 'nomeri miawere',
            'items..product_id.integer' => 'nomeri ricxvia debilo',
            'items..quantity.required' => 'ramdeni gaq es oxeri',
            'items..quantity.integer' => 'raodenobac ricxvia',
            'items..options.required' => 'Each item must have at least one option.',
            'items..options.array' => 'The options for each item must be an array.',
            'items..options.min' => 'Each item must have at least one option.',
            'items..options..string' => 'Each option in the options array must be a string.',
        ];
    }
}
