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
        $response = $next($request);

        try {
            $visitorId = $request->cookie('visitor_id');

            // If visitor_id cookie does not exist, generate a new unique ID and set it as a cookie
            if (!$visitorId) {
                $visitorId = Str::uuid();
                $response->headers->setCookie(cookie('visitor_id', $visitorId, 60 * 24 * 365 * 5)); // 5 years
            }

            Event::create([
                'type' => 'pageview',
                'attribute' => $request->path(),
                'useragent' => $request->userAgent(),
                'visitorid' => $visitorId,
            ]);

            return $response;
        } catch (Error $e) {
            report($e);
            return $response;
        }
    }
}
