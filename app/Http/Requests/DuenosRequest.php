<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class DuenosRequest extends FormRequest
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
        'Nombre'=>'required|max:255'  , 
        'Apellido'=>'required|max:255'  , 
        'Sexo'=>'required'  , 
        'Edad'=>'required|max:3|'  , 
        'Cedula' => 'required|min:3|max:15|unique:dueno,Cedula',
        'Carros'=>'required|integer|',
        'Direccion'=>'required',
        'Telefono'=>'required',
          'Celular' =>'required'
        ];
    }
    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
    public function messages()
    {
        return [
            'Nombre.required' => 'Nombre Es requerido',
            'Apellido.required' => 'Apellido Es requerido!',
            'Sexo.required' => 'Sexo Es requerido!',
            'Cedula.unique'=> 'Cedula existente en la base de datos',
            'Cedula.required'=> 'Cedula Es requerida',
            'Carros.required'=> 'Carros es requerido',
            'Direccion.required'=>'Direccion es requerido',
            'Telefono.required'=>'Telefono es requerido',
            'Celular.required'=>'Celular es requerido'
        
        ];
    }
}
