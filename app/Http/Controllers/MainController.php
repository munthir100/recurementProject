<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Worker;
use App\Models\Account;
use App\Models\CallCenter;
use App\Models\AccountType;
use Illuminate\Http\Request;
use App\Models\InquiryRequest;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateInquiryRequestRequest;
use App\Models\Blog;

class MainController extends Controller
{
    public function home()
    {
        return view('main-site.home');
    }

    public function contact()
    {
        return view('main-site.contact');
    }

    public function blog()
    {
        $blogs = Blog::with('author')->whereStatusId(Status::ACTIVE)->dynamicPaginate();

        return view('main-site.blogs.index', compact('blogs'));
    }

    public function blogDetails($blogId)
    {
        $blog = Blog::whereStatusId(Status::ACTIVE)->findOrFail($blogId);

        $relatedBlogs = Blog::whereStatusId(Status::ACTIVE)
            ->where('title', '%like%', $blog->title)
            ->limit(20)->get();

        return view('main-site.blogs.show', compact('blog', 'relatedBlogs'));
    }


    public function about()
    {
        return view('main-site.about');
    }

    public function workers()
    {
        $workers = Worker::whereStatusId(Status::ACTIVE)->dynamicPaginate();

        return view('main-site.home.workers', compact('workers'));
    }

    public function workerDetails($workerId)
    {
        $worker = Worker::where('status_id', Status::ACTIVE)->findOrFail($workerId);
        return view('main-site.home.workerDetails', compact('worker'));
    }

    public function callCenters()
    {
        $callCenters = CallCenter::with('account')->dynamicPaginate();
        return view('main-site.home.callCenters', compact('callCenters'));
    }

    public function callCenterDetails(CallCenter $callCenter)
    {
        return view('main-site.home.callCenterDetails', compact('callCenter'));
    }

    public function createInqueryRequestForm()
    {
        $validator = Validator::make(request()->all(), [
            'worker_id' => 'required|integer|exists:workers,id',
            'call_center_id' => 'required|integer|exists:call_centers,id',
        ]);

        if ($validator->fails()) {
            return redirect('workers');
        }

        return view('main-site.InquiryRequests.create');
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
