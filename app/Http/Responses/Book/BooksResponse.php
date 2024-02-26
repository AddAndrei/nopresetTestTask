<?php

namespace App\Http\Responses\Book;

use App\Http\Responses\Author\AuthorResponse;
use App\Http\Responses\Response;
use App\Models\Books\Book;
use Illuminate\Http\Request;

class BooksResponse extends Response
{
    /**
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        /** @var Book $this */
        return [
            'id' => $this->getKey(),
            'title' => $this->title,
            'description' => $this->description,
            'author' => $this->relationLoaded('author')
                ? AuthorResponse::make($this->author)
                : null,
        ];
    }
}
