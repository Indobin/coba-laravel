<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
                'name' => ['required', 'min:3', 'max:255', 'string'],
                'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user?->id)],
                'password' => ['required', 'min:8', 'max:255'],
        ];
    }
}
