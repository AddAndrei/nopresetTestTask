<?php

namespace App\Http\Requests\Books;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
{
    public function validationData(): array
    {
        return $this->only(
            [
                'title',
                'description',
                'author_id',
            ]
        );
    }

    public function rules(): array
    {
        return [
            'title' => 'string',
            'description' => 'string|nullable',
            'author_id' => 'integer|nullable',
        ];
    }
}
