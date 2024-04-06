<?php

namespace App\Http\Controllers\Account\Office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Status;
use App\Models\Worker;

class CvController extends Controller
{
    public function index()
    {
        $cvs = Worker::whereRelation('office', 'id', '=', request()->user('account')->office->id)->get()->select('cv');

        return view('account.office.cv.index', compact('cvs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cv' => 'required|file|max:2048', // Validate file type and size
        ]);

        $worker = Worker::create([
            'office_id' => $request->user('account')->office->id
        ]);

        $worker->addMedia($request->file('cv'))->toMediaCollection('cvs');

        return redirect()->back()->with('success', 'Worker created successfully.');
    }

    public function deActivate($workerId)
    {
        $worker = request()->user('account')->office->workers()->findOrFail(($workerId));

        $worker = $worker->update([
            'status_id' => Status::NOT_ACTIVE
        ]);

        return back()->with('success', 'worker deleted');
    }
}
