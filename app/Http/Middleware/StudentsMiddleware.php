<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentsMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('X-Custom-Header') !== 'very-nice!') {
            return response('Unauthorized.', Response::HTTP_UNAUTHORIZED);
        }
        return $next($request);
    }
}
