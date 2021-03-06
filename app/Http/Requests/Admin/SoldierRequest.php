<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SoldierRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:1|max:255',
            'race_id' => 'required|integer|exists:races,id',
            'class_id' => 'required|integer|exists:classes,id',
            'level' => 'required|integer',
            'experience' => 'required|integer',
            'image' => 'nullable|mimes:jpg,jpeg,png,gif'
        ];
    }
}
