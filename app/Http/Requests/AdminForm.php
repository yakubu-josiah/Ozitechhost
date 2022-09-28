<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminForm extends FormRequest
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
            //Brand Partners
            'FPS_Img1' => 'bail|required',
            'FPS_Img2' => 'bail|required',
            'FPS_Img3' => 'bail|required',
            'FPS_Img4' => 'bail|required',
            'FPS_Img5' => 'bail|required',
            'FPS_Img6' => 'bail|required'
        ];
    }
}
