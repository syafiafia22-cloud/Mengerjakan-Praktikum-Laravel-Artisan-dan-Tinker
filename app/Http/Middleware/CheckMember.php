<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckMember
{
    public function handle(Request $request, Closure $next): Response
    {
        $statusMember = true;

        if (!$statusMember) {
            return response('Anda bukan member.', 403);
        }

        return $next($request);
    }
}
