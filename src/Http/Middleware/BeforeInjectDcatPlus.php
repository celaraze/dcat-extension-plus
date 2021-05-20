<?php

namespace Celaraze\DcatPlus\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Class BeforeInjectDcatPlus
 * @package Celaraze\DcatPlus\Http\Middleware
 */
class BeforeInjectDcatPlus
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
