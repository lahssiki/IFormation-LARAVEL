<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "cin"=> "required | min:3",
            "nom"=> "required | min:3",
            "prenom"=> "required | min:3",
            "gender"=> "required",
            "date_naissance"=> "required",
            "note"=> "required",
            "bac_image"=> "required",
            "filiere"=> "required",
            "specialite"=> "required",
        ];
    }
}
