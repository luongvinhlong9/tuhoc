<?php

namespace App\Http\Requests\post;

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
            'content'=>'required'
        ];
    }

    public function messages():array{
        return [
            'content.required'=> 'Vui lòng nhập nội dung bài viết!',

        ];
    }
}
