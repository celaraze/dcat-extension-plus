<?php

namespace Celaraze\DcatPlus\Http\Middleware;

use Celaraze\DcatPlus\Support;
use Closure;
use Illuminate\Http\Request;

class MiddleInjectDcatPlus
{
    public function handle(Request $request, Closure $next)
    {

        $support = new Support();
        $support->initConfig();
        $support->injectSidebar();
        $support->injectFields();
        $support->footerRemove();
        $support->headerBlocks();

        return $next($request);
    }
}
