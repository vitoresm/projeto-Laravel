<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
         
            'nome'    => 'required|max:55',
            'telefone'=> 'required|min:7',
            'email'  => 'required|min:7',
            'estado' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'rua'    => 'required',
            'complemento' => 'max:55'

        ];
    }

    public function messages(){
        return [
            'required' =>  'Este campo é obrigatório',
            'min'      =>  'Este campo precisa no mínimo :min caracteres',
            'max'      =>  'O limite de caracteres atingido, no maxímo é :max'
            
        ];
    }
}
