<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class Carroscreaterequest extends FormRequest
{
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
            
            'Marca'=>'required',
            'Modelo'=>'required',
            'Ano'=>'required',
            'Trim'=>'required',
            'Duenos'=>'required',
            'Valor_estimado'=>'required|integer|'
        ];
    }
    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
    public function messages()
    {
        return [
            'Marca.required'=>'El campo Marca es requerido',
            'Modelo.required'=>'El campo Modelo es requerido',
            'Ano.required'=>'El campo año es requerido',
            'Trim.required'=>'El campo Trim es requerido',
            'Duenos.required'=>'El campo Dueno es requerido',
            'Valor_estimado.required'=>'El campo Valor estimado es requerido',
         'Valor_estimado.integer' => 'El campo id_dueno debe ser de numeros enteros'
            
        ];
    }
}
