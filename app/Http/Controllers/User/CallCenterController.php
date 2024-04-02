<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CallCenter;
use App\Http\Requests\User\CallCenter\CreateCallCenterRequest;
use App\Http\Requests\User\CallCenter\UpdateCallCenterRequest;
use App\Models\Account;
use App\Models\AccountType;

class CallCenterController extends Controller
{
    public function index()
    {
        $callCenters = CallCenter::with('account')->get();
        return view('user.dashboard.callCenters.index', compact('callCenters'));
    }

    public function create()
    {
        return view('user.dashboard.callCenters.create');
    }

    public function store(CreateCallCenterRequest $request)
    {
        $account = Account::create(
            array_merge($request->validated(), ['account_type_id' => AccountType::CALL_CENTER])
        );
        $account->callCenter()->create([]);

        return redirect()->route('user.dashboard.callCenters.index')->with('success', 'Call center created successfully.');
    }

    public function edit(CallCenter $callCenter)
    {
        $callCenter->load('account');
        return view('user.dashboard.callCenters.edit', compact('callCenter'));
    }

    public function update(UpdateCallCenterRequest $request, CallCenter $callCenter)
    {
        $callCenter->update($request->validated());
        $callCenter->account()->update($request->validated());

        return redirect()->route('user.dashboard.callCenters.index')->with('success', 'Call center updated successfully.');
    }

    public function show(CallCenter $callCenter)
    {
        $callCenter->load('account');
        return view('user.dashboard.callCenters.show', compact('callCenter'));
    }

    public function destroy(CallCenter $callCenter)
    {
        $callCenter->account()->delete();

        return redirect()->route('user.dashboard.callCenters.index')->with('success', 'Call center deleted successfully.');
    }
}
