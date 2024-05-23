<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    public function creating(Post $post): void
    {
        if (auth()->check()) {
            $post->user_id = auth()->id();
        }
    }

    
}
