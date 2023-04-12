<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuleUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'icon' => 'required',
            'link' => 'required',
            'function' => 'required',
            'type_handler' => 'required',
            'controller_name' => 'required',
            'sort_field' => 'required',
            'organization_id' => 'required'
        ];
    }
}
