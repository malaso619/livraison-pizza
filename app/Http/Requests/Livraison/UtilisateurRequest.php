<?php

namespace App\Http\Requests\Livraison;

use Illuminate\Foundation\Http\FormRequest;

class UtilisateurRequest extends FormRequest
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
            //
            'name'=>'required|max:255|unique:users_perso',
            'NOM'=>'required|max:255',
            'email'=>'required|email|unique:users_perso',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'required'
        ];
    }
}
