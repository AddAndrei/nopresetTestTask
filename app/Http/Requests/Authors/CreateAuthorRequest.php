<?php

namespace App\Http\Requests\Authors;

use Illuminate\Foundation\Http\FormRequest;

class CreateAuthorRequest extends FormRequest
{
    public function validationData(): array
    {
        return $this->only(
            [
                'name',
            ]
        );
    }

    public function rules(): array
    {
        return [
            'name' => 'string',
        ];
    }
}
