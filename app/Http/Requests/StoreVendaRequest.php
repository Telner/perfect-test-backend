<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
            'produto_id'      => 'required',
            'qtd'             => 'required',
            'status'          => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'produto_id.required'            => 'O campo do produto é obrigatório.',
            'qtd.required'       => 'O campo qtd do produto é obrigatório.',
            'status.required'           => 'O campo status do produto é obrigatório.',
        ];
    }

}
