<?php

namespace Celaraze\DcatPlus\Http\Middleware;

use Celaraze\DcatPlus\Support;
use Closure;
use Illuminate\Http\Request;

class BeforeInjectDcatPlus
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
