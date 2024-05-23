<?php

namespace App\Observers;

use App\Models\Comment;

class CommentObserver
{
    public function creating(Comment $comment): void
    {
        if (auth()->check()) {
            $comment->user_id = auth()->id();
        }
    }
}
