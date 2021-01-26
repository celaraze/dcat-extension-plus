<?php

namespace Celaraze\DcatPlus;

use Celaraze\DcatPlus\Http\Middleware\InjectDcatPlus;
use Dcat\Admin\Admin;
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

    public static function footerRemove()
    {
        if (admin_setting('footer_remove')) {
            Admin::style(
                <<<CSS
.main-footer {
    display: none;
}
CSS
            );
        }
    }

    public static function headerBlocks()
    {
        if (admin_setting('header_blocks')) {
            Admin::style(
                <<<CSS
.navbar {
    margin: 0 35px 0 35px;
    height: 70px;
}

.nav-link {
    padding: 0;
}

.empty-data {
    text-align: center;
    color: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: left;
}

.font-grey {
    color: white;
}

CSS
            );
        }
    }
}
