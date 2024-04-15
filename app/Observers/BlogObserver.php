<?php

namespace App\Observers;

use App\Models\Blog;
use App\Models\Status;

class BlogObserver
{
    public function updated(Blog $blog)
    {
        if (request()->has('status_id') && request()->status_id = Status::ACTIVE) {
            $blog->published_at = now();
        }
    }
}
