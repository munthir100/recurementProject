<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Models\Account;
use App\Models\CallCenter;
use App\Models\AccountType;
use Illuminate\Http\Request;
use App\Models\InquiryRequest;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateInquiryRequestRequest;
use App\Models\Status;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function workers()
    {
        $workers = Worker::whereStatusId(Status::ACTIVE)->dynamicPaginate();

        return view('home.workers', compact('workers'));
    }

    public function workerDetails($workerId)
    {
        $worker = Worker::where('status_id', Status::ACTIVE)->findOrFail($workerId);
        return view('home.workerDetails', compact('worker'));
    }

    public function callCenters()
    {
        $callCenters = CallCenter::with('account')->dynamicPaginate();
        return view('home.callCenters', compact('callCenters'));
    }

    public function callCenterDetails(CallCenter $callCenter)
    {
        return view('home.callCenterDetails', compact('callCenter'));
    }

    public function createInqueryRequest(CreateInquiryRequestRequest $request)
    {
        InquiryRequest::create($request->validated());
        return redirect()->route('home.index')->with('success', 'Inquiry request created successfully.');
    }

    public function changeLocale(Request $request)
    {
        $request->validate(['locale' => 'string|in:ar,en']);
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}
