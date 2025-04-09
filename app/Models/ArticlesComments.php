<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticlesComments extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'comment',
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Articles::class, 'article_id');
    }
    
}
