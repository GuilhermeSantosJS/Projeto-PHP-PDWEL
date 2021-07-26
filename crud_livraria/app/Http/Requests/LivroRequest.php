<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
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
            'nome'=>'required',
            'autor'=>'required',
            'editora'=>'required',
            'isbn'=>'required|numeric',
            'idioma'=>'required',
            'paginas'=>'required|numeric',
            'preco'=>'required',
            'avaliacao_livro'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Coloque o nome do livro!',
            'autor.required' => 'Coloque o nome do autor!',
            'editora.required' => 'Coloque a editora do livro!',
            'isbn.numeric' => 'Coloque o numero do ISBN do livro!',
            'idioma.required' => 'Coloque o idioma do livro!',
            'paginas.numeric' => 'Coloque o numero das paginas do livro!',
            'preco.required' => 'Informe o preço do livro!',
            'avaliacao_livro.numeric'  => 'Dê uma avaliação para o livro!',
        ];
    }
}
