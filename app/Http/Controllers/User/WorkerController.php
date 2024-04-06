<?php

namespace App\Http\Controllers\User;

use App\Models\Worker;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Worker\CreateWorkerRequest;
use App\Http\Requests\User\Worker\UpdateWorkerRequest;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::with('office.account')->dynamicPaginate();
        return view('user.dashboard.workers.index', compact('workers'));
    }

    public function create()
    {
        return view('user.dashboard.workers.create');
    }

    public function store(CreateWorkerRequest $request)
    {
        $worker = Worker::create($request->validated());
        return redirect()->route('user.dashboard.workers.index')->with('success', 'Worker created successfully.');
    }

    public function show(Worker $worker)
    {
        return view('user.dashboard.workers.show', compact('worker'));
    }

    public function edit(Worker $worker)
    {
        return view('user.dashboard.workers.edit', compact('worker'));
    }

    public function update(UpdateWorkerRequest $request, Worker $worker)
    {
        $worker->update($request->validated());
        return back()->with('success', 'Worker updated successfully.');
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('user.dashboard.workers.index')->with('success', 'Worker deleted successfully.');
    }
}
