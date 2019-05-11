<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class Obtenercarroidduenorequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_dueno' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'id_dueno.required'=>'El campo Id_Carro es requerido'
        ];
    }
}
