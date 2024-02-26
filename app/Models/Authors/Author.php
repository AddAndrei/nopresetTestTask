<?php

namespace App\Models\Authors;

use App\Models\BaseModel;
use App\Models\Books\Book;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Author
 * @package App\Models\Authors
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property HasMany $books
 * @author Shcerbakov Andrei
 */
class Author extends BaseModel
{

    use HasFactory;

    protected $table = 'authors';

    /** @var string[] */
    protected $fillable = [
        'name',
    ];

    /** @var string[] */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'booksCount',
    ];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'author_id', 'id');
    }

    public function getBooksCountAttribute(): int
    {
        return $this->books()->count();
    }
}
