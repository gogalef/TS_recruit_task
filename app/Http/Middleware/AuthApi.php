<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // Ваш код для обработки запросов API
        if (!$request->isJson()) {
            return response()->json(['error' => 'Invalid Content Type'], 400);
        }

        return $next($request);
    }
}
