<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionnaireSubmitRequest extends FormRequest
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
            'privacy_accepted' => 'required',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'position' => 'required|string|max:255',
            'company_relationship' => 'required|string',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'years_in_market' => 'required|numeric',
            'employees_count' => 'required|numeric',
            'family_members_count' => 'required|numeric',
            'products_services' => 'required|string',
            'generations_interacting' => 'required|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'privacy_accepted.required' => 'Debe aceptar el aviso de privacidad para continuar.',
            'full_name.required' => 'El nombre completo es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Ingrese un correo electrónico válido.',
            'phone.required' => 'El número de contacto es obligatorio.',
            'position.required' => 'El cargo es obligatorio.',
            'company_relationship.required' => 'La relación con la empresa es obligatoria.',
            'company_name.required' => 'El nombre de la empresa es obligatorio.',
            'location.required' => 'El municipio y estado son obligatorios.',
            'years_in_market.required' => 'Los años en el mercado son obligatorios.',
            'employees_count.required' => 'El número de colaboradores es obligatorio.',
            'family_members_count.required' => 'El número de miembros familiares es obligatorio.',
            'products_services.required' => 'La descripción de productos/servicios es obligatoria.',
            'generations_interacting.required' => 'Debe seleccionar las generaciones que interactúan.',
        ];
    }
}
