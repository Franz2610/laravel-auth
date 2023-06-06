<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'image' => 'required',
            'bodytexr' => 'required|min:20',
            'languages' => 'required|min:2'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Il nome è obbligatoriio',
            'bodytext.min' => 'Componi 3 caratteri',
            'languages.min' => 'Scrivi almeno 2 caratteri',
            'image.max' => 'La URL deve essere lunga massimo :max caratter! '
        ];
    }
}
