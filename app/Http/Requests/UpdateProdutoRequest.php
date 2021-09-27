<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdutoRequest extends FormRequest
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
            'name'      => 'required|max:255',
            'descricao' => 'required',
            'preco'     => 'required|decimal'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'            => 'O campo nome do produto é obrigatório.',
            'descricao.required'       => 'O campo descricao do produto é obrigatório.',
            'preco.required'           => 'O campo preco do produto é obrigatório.',
        ];
    }

}
