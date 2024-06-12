<?php

namespace App\Http\Middleware;

use App\Models\Event;
use Closure;
use Error;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Make it an after middleware
        $response = $next($request);

        try {
            Event::create(['type' => 'pageview', 'attribute' => $request->path(), 'useragent' => $request->userAgent(), 'visitorid' => session()->getId()]);

            return $response;
        } catch (Error $e) {
            report($e);
            return $response;
        }
    }
}
