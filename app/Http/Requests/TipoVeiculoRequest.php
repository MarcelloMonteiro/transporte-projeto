<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoVeiculoRequest extends FormRequest
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
            'tipo' => ['required', 'unique:tipos_veiculo,tipo'],
            'descricao' => ['nullable', 'min:2']
        ];

        if ($this->method() == 'PUT')
            $rules['tipo'] = ['required', "unique:tipos_veiculo,tipo,{$uuid},uuid"];

        return $rules;
    }
}
