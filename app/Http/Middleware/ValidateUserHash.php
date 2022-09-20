<?php

namespace App\Http\Middleware;

use App\Http\Services\UserHashService;
use Closure;
use Illuminate\Http\Request;

class ValidateUserHash
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = $request->get('userId');
        if ($request->get('userIdHash') !== UserHashService::getUserHashById($userId)) {
            return response()->json(['error' => 'Not authorized'], 401);
        }
        return $next($request);
    }
}
