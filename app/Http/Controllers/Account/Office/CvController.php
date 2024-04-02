<?php

namespace App\Http\Controllers\Account\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Worker;

class CvController extends Controller
{
    public function index()
    {
        $cvs = Worker::whereRelation('office', 'id', '=', request()->user('account')->office->id)->get()->select('cv');

        return view('account.office.cv.index', compact('cvs'));
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();

        return to_route('office.cv.index');
    }
}
