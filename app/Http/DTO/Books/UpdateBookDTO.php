<?php

namespace App\Http\DTO\Books;

use App\Http\DTO\DTO;

class UpdateBookDTO extends DTO
{
    public ?string $title;
    public ?string $description;
    public ?int $author_id;
}
