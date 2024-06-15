<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Gate::allows('viewAdminDashboard', auth()->user())) {
            return abort(403, 'Unauthorized'); // Or redirect to a different page
        }

        return $next($request);
    }
}
