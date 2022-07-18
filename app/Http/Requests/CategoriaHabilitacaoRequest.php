<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaHabilitacaoRequest extends FormRequest
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
            'categoria' => ['required', 'unique:categorias_habilitacao,categoria'],
            'descricao' => ['nullable', 'min:2']
        ];

        if ($this->method() == 'PUT')
            $rules['categoria'] = ['required', "unique:categorias_habilitacao,categoria,{$uuid},uuid"];

        return $rules;
    }
}
