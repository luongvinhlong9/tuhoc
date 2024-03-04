<?php

namespace App\Http\Requests\document;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required',
            'content'=>'required'
        ];
    }

    public function messages():array{
        return [
            'name.required'=> 'Vui lòng nhập tên môn học!',
            'content.required'=> 'Vui lòng nhập nội dung!',

        ];
    }
}
