<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class discountRequest extends FormRequest
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
    
        if($this->request->get('id')){
            return [

            'big_offer'=> 'required| numeric | between:0,100',
            'small_offer_top' =>'required| numeric | between:0,100',
            'small_offer_bottom'=> 'required| numeric | between:0,100',
        ];

    } else{

        return [
            'big_offer_image' => 'required',
            'big_offer'=> 'required| numeric | between:0,100',
            'small_offer_top_image' => 'required',
            'small_offer_top' =>'required| numeric | between:0,100',
            'small_offer_bottom_image' => 'required',
            'small_offer_bottom'=> 'required| numeric | between:0,100',
        ];


    }
        
    }
}
