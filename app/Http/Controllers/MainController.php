<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Models\Account;
use App\Models\CallCenter;
use App\Models\AccountType;
use App\Models\InquiryRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateInquiryRequestRequest;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function workers()
    {
        $workers = Worker::all();
        return view('workers', compact('workers'));
    }

    public function workerDetails(Worker $worker)
    {
        return view('workerDetails', compact('worker'));
    }

    public function callCenters()
    {
        $callCenters = CallCenter::with('account')->get();
        return view('callCenters', compact('callCenters'));
    }

    public function callCenterDetails(CallCenter $callCenter)
    {
        return view('callCenterDetails', compact('callCenter'));
    }

    public function createInqueryRequest(CreateInquiryRequestRequest $request)
    {
        InquiryRequest::create($request->validated());
        return redirect()->route('home')->with('success', 'Inquiry request created successfully.');
    }
}
