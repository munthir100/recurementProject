<?php

namespace App\Http\Middleware;

use App\Models\AccountType;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isCallCenter
{
    public function handle(Request $request, Closure $next): Response
    {
        if (request()->user('account')->account_type_id != AccountType::CALL_CENTER) {
            abort(403);
        }
        return $next($request);
    }
}
