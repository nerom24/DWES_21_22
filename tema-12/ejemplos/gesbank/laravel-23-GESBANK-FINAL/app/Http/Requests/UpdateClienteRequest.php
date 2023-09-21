<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Cliente;
use Illuminate\Validation\Rule;


class UpdateClienteRequest extends FormRequest
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
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'telefono' => 'required|string|min:9|max:15',            
            'dni' => 'required|unique:Clientes,dni,'.$this->cliente,
            'email' =>'required|email|max:50|unique:Clientes,email,'.$this->cliente
        ];
    }
}
