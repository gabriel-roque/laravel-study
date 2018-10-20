<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // como nao esta trabalhando com ACL, deixar TRUE para autorizar
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
            'name' => 'required|min:3|max:100',
            'number' => 'required|numeric',
            'category' => 'required',
            'description' => 'min:3|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome e obrigatorio',
            'number.numeric' => 'Apenas numeros',
            'number.required' => 'O campo de numero e obrigatorio',
            'category.required' => 'O campo de categoria e obrigatorio',
            'description.min' => 'A descricao deve ter no min 3 caracteres',
        ];
    }
}
