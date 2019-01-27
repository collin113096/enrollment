<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationFormRequest extends FormRequest
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
            'student.first_name' => 'required',
            'student.middle_name' => 'required',
            'student.last_name' => 'required',
            'student.home_address' => 'required',
            'student.birth_date' => 'required',
            'student.birth_place' => 'required',
            'student.religion' => 'required',
            'student.gender' => 'required',
            'student.grade' => 'required',
            'father.name' => 'required',
            'father.occupation' => 'required',
            'father.contact' => 'required',
            'mother.name' => 'required',
            'mother.occupation' => 'required',
            'mother.contact' => 'required',
        ];
    }
}
