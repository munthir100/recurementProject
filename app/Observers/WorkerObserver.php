<?php

namespace App\Observers;

use App\Models\Worker;

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
}
