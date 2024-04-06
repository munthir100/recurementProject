<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CallCenter;
use App\Models\Office;
use App\Models\Worker;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function dashboard()
    {
        $callCentersCount = CallCenter::count();
        $officesCount = Office::count();
        $workersCount = Worker::count();
        $cvsCount = Worker::whereNull('first_name')->count();

        return view('user.dashboard.index', compact(
            'callCentersCount',
            'officesCount',
            'workersCount',
            'cvsCount'
        ));
    }
}
