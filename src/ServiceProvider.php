<?php

namespace Celaraze\DcatPlus;

use Celaraze\DcatPlus\Http\Middleware\InjectDcatPlus;
use Dcat\Admin\Extend\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    protected $js = [
        'js/index.js',
    ];
    protected $css = [
        'css/index.css',
    ];
    protected $middleware = [
        'middle' => [
            InjectDcatPlus::class
        ]
    ];
    protected $menu = [
        [
            'title' => '增强配置',
            'uri' => 'dcat-plus/site',
            'icon' => 'feather icon-settings'
        ]
    ];

    public function register()
    {
        //
    }

    public function init()
    {
        parent::init();

    }
}
