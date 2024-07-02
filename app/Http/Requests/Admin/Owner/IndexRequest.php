<?php

namespace App\Http\Requests\Admin\Owner;

use Illuminate\Foundation\Http\FormRequest;
use Packages\UseCase\Admin\Owner\Index\Input;

class IndexRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'page' => 'integer|min:1',
            'limit' => 'integer|min:1|max:50',
        ];
    }

    public function toUseCaseInput(): Input
    {
        $validated = $this->validated();
        // dd(Input::fromArray($validated));
        return Input::fromArray($validated);
    }
}
