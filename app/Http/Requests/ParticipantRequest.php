<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipantRequest extends FormRequest
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
            'fullname' => 'required|min:6',
            'email' => 'required|email',
            'whatsapp' => 'required|numeric|digits_between:11,13',
            'gender' => 'required|in:laki-laki,perempuan',
            'blog_link' => 'required|url',
            'work_file' => 'required|file|max:5120|mimes:pdf,doc,docx',
            'follows' => 'required|array|min:1|max:5',
            'follows.*' => 'required|file|max:5120',
        ];
    }
}
