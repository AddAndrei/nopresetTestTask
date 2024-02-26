<?php

namespace App\Models\Books;

use App\Models\Authors\Author;
use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Book
 * @package App\Models\Books
 * @property int $id
 * @property string|null $description
 * @property string $title
 * @property int $author_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Author $author
 * @author Shcerbakov Andrei
 */
class Book extends BaseModel
{
    use HasFactory;

    protected $table = 'books';

    /** @var string[] */
    protected $fillable = [
        'description',
        'title',
        'author_id',
    ];

    /** @var string[] */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
