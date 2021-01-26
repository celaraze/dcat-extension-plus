<?php

namespace Celaraze\DcatPlus\Http\Middleware;

use Celaraze\DcatPlus\Support;
use Closure;
use Illuminate\Http\Request;

class InjectDcatPlus
{
    public function handle(Request $request, Closure $next)
    {

        $support = new Support();
        $support->initConfig();
        $support->injectSidebar();
        $support->footerRemove();
        $support->headerBlocks();

        return $next($request);
    }
}
