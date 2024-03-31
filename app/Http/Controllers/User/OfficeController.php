<?php

namespace App\Http\Controllers\User;

use App\Models\Office;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Office\CreateOfficeRequest;
use App\Http\Requests\User\Office\UpdateOfficeRequest;
use App\Models\Account;
use App\Models\AccountType;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Account::whereAccountTypeId(AccountType::OFFICE)->with('office')->get();
        return view('user.offices.index', compact('offices'));
    }

    public function create()
    {
        return view('user.offices.create');
    }

    public function store(CreateOfficeRequest $request)
    {
        $account = Account::create($request->validated());
        $account->office()->create($request->validated());
        return redirect()->route('offices.index')->with('success', 'Office created successfully.');
    }

    public function edit(Office $office)
    {
        $office->load('account');
        return view('user.offices.edit', compact('office'));
    }

    public function show(Office $office)
    {
        $office->load('account');
        return view('user.offices.show', compact('office'));
    }

    public function update(UpdateOfficeRequest $request, Office $office)
    {
        if ($request->filled('location')) {
            $office->update($request->validated());
        }
        if ($request->filled('name', 'email', 'phone', 'password')) {
            $office->account()->update($request->validated());
        }

        return redirect()->route('offices.index')->with('success', 'Office updated successfully.');
    }

    public function destroy(Office $office)
    {
        $office->account()->delete();
        return redirect()->route('offices.index')->with('success', 'Office deleted successfully.');
    }
}
