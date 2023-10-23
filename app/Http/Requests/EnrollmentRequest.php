<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class EnrollmentRequest extends FormRequest
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
            'fname' => [
                'required',
                Rule::unique('students')->where('fname', $this->fname)->where('lname', $this->lname),
                ],
            'lname' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fname.unique' => 'You already have a record for this year\'s enrollment record. Check in the email you used to register',
        ];
    }
}
