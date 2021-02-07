<?php

namespace Celaraze\DcatPlus\Http\Controllers;

use Celaraze\DcatPlus\Forms\DcatPlusUIForm;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Tab;
use Illuminate\Routing\Controller;

class DcatPlusUIController extends Controller
{
    public function index(Content $content): Content
    {
        return $content->header('增强配置')
            ->description('提供了一些对站点增强的配置')
            ->body(function (Row $row) {
                $tab = new Tab();
                $tab->addLink('站点配置', admin_route('dcat-plus.site.index'));
                $tab->add('UI优化', new DcatPlusUIForm(), true);
                $tab->addLink('扩展字段类型', admin_route('dcat-plus.field.index'));
                $row->column(12, $tab->withCard());
            });
    }
}
