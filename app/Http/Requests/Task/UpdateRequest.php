<?php

namespace App\Http\Requests\Task;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required',
            'status' => 'nullable',
            'images' => 'nullable|array',
            'user_id' => 'nullable|integer|exists:users,id',
            'area_id' => 'nullable|integer|exists:areas,id',
        ];
    }
}
