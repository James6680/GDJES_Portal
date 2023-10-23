<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
                'subject_name' => [
                    'required',
                    Rule::unique('subjects')->where('subject_name', $this->subject_name)->where('grade_level_id', $this->grade_level_id),
                    ],
            ];
        }
        return [];
    }

    public function messages()
    {
        return [
            'subject_name.unique' => 'This Subject already exist in this grade level',
        ];
    }
}
