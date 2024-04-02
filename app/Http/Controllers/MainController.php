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

    public function changeLocale(Request $request)
    {
        $request->validate(['locale' => 'string|in:ar,en']);
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}
