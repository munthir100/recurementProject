<?php

namespace App\Http\Controllers\User;

use App\Models\Account;
use App\Models\CallCenter;
use App\Models\AccountType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\CallCenter\CreateCallCenterRequest;
use App\Http\Requests\User\CallCenter\UpdateCallCenterRequest;

class CallCenterController extends Controller
{
    public function index()
    {
        $callCenters = CallCenter::with('account')->dynamicPaginate();
        return view('dashboard.callCenters.index', compact('callCenters'));
    }

    public function create()
    {
        return view('dashboard.callCenters.create');
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
        return view('dashboard.callCenters.edit', compact('callCenter'));
    }

    public function update(UpdateCallCenterRequest $request, CallCenter $callCenter)
    {
        $callCenter->update($request->validated());
        $callCenter->account()->update($request->validated());

        return back()->with('success', 'Call center updated successfully.');
    }

    public function show(CallCenter $callCenter)
    {
        $callCenter->load('account');
        return view('dashboard.callCenters.show', compact('callCenter'));
    }

    public function destroy(CallCenter $callCenter)
    {
        $callCenter->account()->delete();

        return redirect()->route('user.dashboard.callCenters.index')->with('success', 'Call center deleted successfully.');
    }

    public function updatePassword(CallCenter $callCenter, Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8'
        ]);
        $callCenter->account()->update([
            'password' => $request->password
        ]);

        return back()->with('success', 'password updated');
    }
}
