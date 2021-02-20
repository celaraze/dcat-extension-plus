<?php

namespace Celaraze\DcatPlus\Http\Middleware;

use Celaraze\DcatPlus\Support;
use Closure;
use Illuminate\Http\Request;

class MiddleInjectDcatPlus
{
    public function handle(Request $request, Closure $next)
    {
        $inputs = $request->all();
        $new_inputs = [];
        foreach ($inputs as $key => $input) {
            if ($input != null && !is_array($input)) {
                $input = strip_tags($input);
            }
            $new_inputs[$key] = $input;
        }
        $request->merge($new_inputs);

        $support = new Support();
        $support->initConfig();
        $support->injectSidebar();
        $support->injectFields();
        $support->footerRemove();
        $support->headerPaddingFix();
        $support->gridRowActionsRight();

        return $next($request);
    }
}
