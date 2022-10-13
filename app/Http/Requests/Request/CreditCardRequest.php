<?php

namespace App\Http\Requests\Request;

use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;
use Illuminate\Foundation\Http\FormRequest;

class CreditCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'card_name' => 'required|string',
            'card_num' =>  ['required', new CardNumber],
            'card_expiry_month' => ['required', new CardExpirationMonth($this->get('expiration_year'))],
            'card_expiry_year' => ['required', new CardExpirationYear($this->get('expiration_month'))],
            'card_cvc' => ['required', new CardCvc($this->get('card_number'))]
        ];
    }
}
