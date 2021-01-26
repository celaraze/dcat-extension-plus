<?php

namespace Celaraze\DcatPlus\Forms;

use Celaraze\DcatPlus\Support;
use Dcat\Admin\Widgets\Form;

class DcatPlusUIForm extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle(array $input)
    {
        admin_setting($input);
        return $this
            ->response()
            ->success('站点配置更新成功！')
            ->refresh();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->switch('footer_remove', Support::trans('main.footer_remove'))
            ->default(admin_setting('footer_remove'));
        $this->switch('header_blocks', Support::trans('main.header_blocks'))
            ->default(admin_setting('header_blocks'));
        $this->switch('sidebar_indentation', Support::trans('main.sidebar_indentation'))
            ->help('侧边菜单栏中的子菜单默认为1个空格缩进，开启后则为4个空格缩进。')
            ->default(admin_setting('sidebar_indentation'));
    }
}
