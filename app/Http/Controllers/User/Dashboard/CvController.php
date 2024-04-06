<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Models\Worker;
use App\Http\Controllers\Controller;

class CvController extends Controller
{
    public function index()
    {
        $workersCvs = Worker::WhereNull('first_name')->with('office.account')->dynamicPaginate();

        return view('user.dashboard.cvs.index', compact('workersCvs'));
    }
}
