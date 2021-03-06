<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            'categories' => explode(',', $this->categories),
            'premium' => ($this->premium === 'true') ? true : false
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'date' => 'required',
            'author' => 'required',
            'content' => 'required',
            'premium' => 'required|boolean',
            'image' => 'mimes:jpeg,bmp,png|max:2000',
            'categories' => 'array'
        ];
    }
}
