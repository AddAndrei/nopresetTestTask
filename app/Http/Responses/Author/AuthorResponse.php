<?php

namespace App\Http\Responses\Author;

use App\Http\Responses\Book\BooksResponse;
use App\Http\Responses\Response;
use App\Models\Authors\Author;
use Illuminate\Http\Request;

class AuthorResponse extends Response
{
    /**
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        /** @var Author $this */
        return [
            'id' => $this->getKey(),
            'name' => $this->name,
            'books' => $this->relationLoaded('books')
                ? BooksResponse::collection($this->books)
                : null,
        ];
    }
}
