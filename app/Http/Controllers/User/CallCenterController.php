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
        $offices = Account::whereAccountTypeId(AccountType::CALL_CENTER)->with('callCenter')->get();
        return view('user.callCenters.index', compact('callCenters'));
    }

    public function create()
    {
        return view('user.callCenters.create');
    }

    public function store(CreateCallCenterRequest $request)
    {
        $account = Account::create($request->validated());
        $account->callCenter()->create([]);

        return redirect()->route('callCenters.index')->with('success', 'Call center created successfully.');
    }

    public function edit(CallCenter $callCenter)
    {
        $callCenter->load('account');
        return view('user.callCenters.edit', compact('callCenter'));
    }

    public function update(UpdateCallCenterRequest $request, CallCenter $callCenter)
    {
        $callCenter->update($request->validated());
        $callCenter->account()->update($request->validated());

        return redirect()->route('callCenters.index')->with('success', 'Call center updated successfully.');
    }

    public function show(CallCenter $callCenter)
    {
        $callCenter->load('account');
        return view('user.callCenters.show', compact('callCenter'));
    }

    public function destroy(CallCenter $callCenter)
    {
        $callCenter->account()->delete();

        return redirect()->route('callCenters.index')->with('success', 'Call center deleted successfully.');
    }
}
