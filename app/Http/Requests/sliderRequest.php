<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sliderRequest extends FormRequest
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

                'background_image' => 'required|image|mimes:jpg,png|max :2024',
                'banner' => 'required|image|mimes:jpg,png|max :2024',
                'hadding1'=>'required|max: 200',
                'hadding2'=>'required|max: 200',
                'title' => 'required',

            ];
    
    }
}
