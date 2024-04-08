<?php

namespace App\Http\Controllers\Account\CallCenter;

use App\Models\Worker;
use App\Models\CallCenter;
use App\Models\InquiryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateInquiryRequestRequest;

class InquiryRequestController extends Controller
{
    public function index()
    {
        $inquiryRequests = InquiryRequest::whereRelation('callCenter', 'id', '=', request()->user('account')->callCenter->id)->with('worker')->get();

        return view('account.callCenter.inquiryRequests.index', compact('inquiryRequests'));
    }

    public function create()
    {
        $validator = Validator::make(request()->all(), [
            'worker_id' => 'required|integer|exists:workers,id',
            'call_center_id' => 'required|integer|exists:call_centers,id',
        ]);

        if ($validator->fails()) {
            return redirect('workers');
        }

        return view('InquiryRequests.create');
    }

    public function store(CreateInquiryRequestRequest $request)
    {
        InquiryRequest::create($request->validated());
        return redirect()->route('workers')->with('success', 'Inquiry request created successfully.');
    }

    public function destroy(InquiryRequest $inquiryRequest)
    {
        $inquiryRequest->delete();
        return redirect()->route('account.callCenter.inquiryRequests.index')->with('success', 'Inquiry request deleted successfully.');
    }
}
