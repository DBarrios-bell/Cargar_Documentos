<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class SaveProjectRequest extends FormRequest
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
            'user_id'=> 'required',
            'nombre' => 'required',
            'observacion' => 'min:5|max:50',
            'archivo'=>'required|max:5120'
        ];
    }

    public function messages()
    {
        return [
            // 'title.required' => 'El proyecto necesita un titulo',
            // 'url.required' => 'El proyecto necesita una URL',
            // 'description.required' => 'El proyecto necesita una descripcion',
            'archivo.required' => 'El proyecto necesita un adjunto'
        ];
    }
}
