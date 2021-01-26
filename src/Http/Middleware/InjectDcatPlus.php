<?php

namespace Celaraze\DcatPlus\Http\Middleware;

use Celaraze\DcatPlus\ServiceProvider;
use Closure;
use Dcat\Admin\Admin;
use Illuminate\Http\Request;

class InjectDcatPlus
{
    public function handle(Request $request, Closure $next)
    {

        // 如果启用了dcat-setting扩展，则加载
        if (Admin::extension()->enabled('celaraze.dcat-extension-plus')) {
            $class = "Celaraze\\DcatPlus\\Support";
            $class::initConfig();
        }

        ServiceProvider::footerRemove();
        ServiceProvider::headerBlocks();

        return $next($request);
    }
}
