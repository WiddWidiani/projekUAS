<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\ArticlesComments;

class Comments extends Model
{
    protected $fillable = [
        'commentable_id',
        'commentable_type',
        'comment',
    ];
}

class Comment extends Model
{
   
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}

class ArticlesComment extends Model
{
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}

class PageComments extends Model
{
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}

$posts = ArticlesComment::with('comments')->get();
 
foreach ($posts as $post) {
    foreach ($post->comments as $comment) {
        echo $comment->commentable->comment;
    }
}