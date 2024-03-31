<?php

namespace App\Http\Controllers\Account\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Worker;

class CvController extends Controller
{
    public function index()
    {
        $cvs = Worker::whereRelation('office_id', '=', request()->user('account')->office->id)->select('cv');
        return view('office.cv.index', compact('cvs'));
    }
}
// last point