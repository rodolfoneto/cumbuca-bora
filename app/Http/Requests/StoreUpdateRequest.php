<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:100',
            'max_users' => 'nullable',
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
            'price_yearly' => "nullable|regex:/^\d+(\.\d{1,2})?$/",
        ];
    }
}
