<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class DuenoeditRequest extends FormRequest
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
                'id_dueno'=>'required|integer|'
        ];
    }
    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
    public function messages()
    {
        return [
            'id_dueno.required'=>'El campo id_dueno es requerido',
         'id_dueno.integer' => 'El campo id_dueno debe ser de numeros enteros'
            
        ];
    }
}
