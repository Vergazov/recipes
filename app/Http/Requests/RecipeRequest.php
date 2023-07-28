<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RecipeRequest extends FormRequest
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
            'name' => ['required', 'min:5'],
            'description' => ['required', 'min:5']
        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'Поле "Название рецепта" должно быть заполнено',
            'name.min' => 'Поле "Название рецепта" должно содержать не менее 5 символов',
            'description.required' => 'Поле "Описание рецепта" должно быть заполнено',
        ];
    }
}
