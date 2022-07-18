<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MontadoraRequest extends FormRequest
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
        $uuid = $this->segment(3);

        $rules = [
            'montadora' => ['required', 'unique:montadoras,montadora'],
            'descricao' => ['nullable', 'min:2'],
            'logo' => ['nullable', 'image']
        ];

        if ($this->method() == 'PUT')
            $rules['montadora'] = ['required', "unique:montadoras,montadora,{$uuid},uuid"];

        return $rules;
    }
}
