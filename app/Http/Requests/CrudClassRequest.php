<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CrudClassRequest extends FormRequest
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
        if($this->formAction === "AddData" || $this->formAction === "EditData"){
            return [
                'section_name' => [
                    'required',
                    Rule::unique('sections')->where('section_name', $this->section_name)->where('grade_level_id', $this->grade_level_id),
                    ],
            ];
        }
        return [];
    }
    public function messages()
    {
        return [
            'section_name.unique' => 'This Section already Exist',
        ];
    }
}
