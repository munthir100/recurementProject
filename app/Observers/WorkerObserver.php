<?php

namespace App\Observers;

use App\Models\Worker;
use Illuminate\Support\Facades\Storage;

class WorkerObserver
{
    public function updating(Worker $worker)
    {
        if (request()->has('practical_experience') && request()->practical_experience != null) {
            $worker->has_practical_experience = true;
        } else {
            $worker->has_practical_experience = false;
        }
    }

    public function deleted(Worker $worker)
    {
        if ($worker->hasMedia('cvs')) {
            $media = $worker->getFirstMedia('cvs');
            $mediaPath = $media->getPath(); // Get the path of the media file
            Storage::delete($mediaPath); // Delete the file from storage
            $media->delete(); // Delete the media entry
        }
        if ($worker->hasMedia('main_images')) {
            $media = $worker->getFirstMedia('main_images');
            $mediaPath = $media->getPath(); // Get the path of the media file
            Storage::delete($mediaPath); // Delete the file from storage
            $media->delete(); // Delete the media entry
        }
    }
}
