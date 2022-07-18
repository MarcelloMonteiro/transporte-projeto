<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoRequest extends FormRequest
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
            'situacao_id' => ['required'],
            'tipo_veiculo_id' => ['required'],
            'modelo_id' => ['required'],
            'placa' => ['required'],
            'ano_fabricacao' => ['required', 'min:2', 'max:4'],
            'ano_modelo' => ['required', 'min:2', 'max:4'],
            'cor_id' => ['required'],
            'combustivel_id' => ['required'],
            'renavam' => ['required'],
            'chassi' => ['nullable'],
            'motorizacao' => ['required'],
            'foto' => ['nullable', 'image'],
            'odometro' => ['nullable'],
        ];
    }
}
