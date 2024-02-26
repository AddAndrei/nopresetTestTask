<?php

namespace App\Http\Controllers\Books;

use App\Exceptions\Attachments\EntityNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\DTO\Authors\FilterAuthorDTO;
use App\Http\DTO\Books\CreateBookDTO;
use App\Http\DTO\Books\UpdateBookDTO;
use App\Http\Requests\Books\CreateBookRequest;
use App\Http\Requests\Books\UpdateBookRequest;
use App\Http\Requests\DestroyRequest;
use App\Http\Requests\FilterRequest;
use App\Http\Responses\Book\BooksResponse;
use App\Http\Responses\DeletedResponse;
use App\Http\Services\EntityMediatr;
use App\Http\Services\Service;
use App\Models\Authors\Author;
use App\Models\Books\Book;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class BookController extends Controller
{
    private EntityMediatr $entityMediatr;

    public function __construct()
    {
        $this->entityMediatr = new EntityMediatr(new Book(), new Service());
    }

    #[Route("/api/books", methods: ["GET"])]
    public function index(FilterRequest $request): AnonymousResourceCollection
    {
        $dto = FilterAuthorDTO::createFromRequest($request);
        $books = $this->entityMediatr->all(null, function (Book $book) use ($dto) {
            return $book::query()->whereHas('author' , function($q) use($dto) {
                if($dto->author) {
                    return $q->where('name', "{$dto->author}");
                }
            })->with('author')->get();
        });
        return BooksResponse::collection($books);
    }

    #[Route("/api/books", methods: ["POST"])]
    public function store(CreateBookRequest $request): BooksResponse
    {
        $dto = CreateBookDTO::createFromRequest($request);
        $book = $this->entityMediatr->store($dto, function (Book $book) use ($dto) {
            if ($dto->author_id) {
                if (!Author::find($dto->author_id)) {
                    throw new EntityNotFoundException("Not author with id:{$dto->author_id}");
                }
                $author = Author::find($dto->author_id);
                $book->author()->associate($author);
            }
            return $book;
        });
        return BooksResponse::make($book)->created();
    }

    #[Route("/api/books/{id}", methods: ["PATCH"])]
    public function update(UpdateBookRequest $request, int $id): BooksResponse
    {
        $dto = UpdateBookDTO::createFromRequest($request);
        $updated = $this->entityMediatr->update($id, $dto, function (Book $book) use ($dto) {
            $relations = [
                'author_id' => [
                    'entity' => Author::class,
                    'method' => 'author',
                ],
            ];
            $book->updateRelations($dto, $relations);
            return $book->load('author');
        });
        return BooksResponse::make($updated);
    }

    #[Route('/api/books/{id}', methods: ["GET"])]
    public function show(int $id): BooksResponse
    {
        return BooksResponse::make(Book::with('author')->find($id));
    }

    #[Route('/api/books', methods: ["DELETE"])]
    public function destroy(DestroyRequest $request): DeletedResponse
    {
        $this->entityMediatr->destroy($request->all());
        return DeletedResponse::make([])->deleted();
    }
}
