<?php

namespace App\Http\Controllers\Authors;

use App\Http\Controllers\Controller;
use App\Http\DTO\Authors\CreateAuthorDTO;
use App\Http\DTO\Authors\UpdateAuthorDTO;
use App\Http\Requests\Authors\CreateAuthorRequest;
use App\Http\Requests\Authors\UpdateAuthorsRequest;
use App\Http\Requests\DestroyRequest;
use App\Http\Responses\Author\AuthorResponse;
use App\Http\Responses\DeletedResponse;
use App\Http\Services\EntityMediatr;
use App\Http\Services\Service;
use App\Models\Authors\Author;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AuthorController extends Controller
{
    private EntityMediatr $entityMediatr;

    public function __construct()
    {
        $this->entityMediatr = new EntityMediatr(new Author(), new Service());
    }
    #[Route("/api/authors", methods: ["GET"])]
    public function index(): AnonymousResourceCollection
    {
        $authors = $this->entityMediatr->all(null, function (Author $author) {
           return $author::get();
        });
        return AuthorResponse::collection($authors);
    }
    #[Route("/api/authors/{id}", methods: ["GET"])]
    public function show(int $id): AuthorResponse
    {
        return AuthorResponse::make(Author::find($id));
    }
    #[Route("/api/authors/{id}", methods: ["PATCH"])]
    public function update(UpdateAuthorsRequest $request, int $id): AuthorResponse
    {
        $dto = UpdateAuthorDTO::createFromRequest($request);
        $updated = $this->entityMediatr->update($id, $dto);
        return AuthorResponse::make($updated);
    }
    #[Route('/api/authors', methods: ["POST"])]
    public function store(CreateAuthorRequest $request): AuthorResponse
    {
        $dto = CreateAuthorDTO::createFromRequest($request);
        $author = $this->entityMediatr->store($dto);
        return AuthorResponse::make($author)->created();
    }
    #[Route('/api/authors', methods: ["DELETE"])]
    public function destroy(DestroyRequest $request)
    {
        $this->entityMediatr->destroy($request->all());
        return DeletedResponse::make([])->deleted();
    }
}
