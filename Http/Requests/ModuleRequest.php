<?php

namespace Unet\Module\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ModuleRequest
 * @package Unet\Module\Http\Requests
 */
class ModuleRequest extends FormRequest
{
    /**
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'description' => 'required'
    ];

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
        $rules = $this->rules;

        return $rules;
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email not valid',
            'description.required' => 'Description is required'
        ];
    }
}