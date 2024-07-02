<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SampleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function toUseCaseInput(): Input
    {
        return Input::fromArray($validated);
    }
}
