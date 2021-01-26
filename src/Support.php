<?php


namespace Celaraze\DcatPlus;


class Support
{
    /**
     * 快速翻译（为了缩短代码量）
     * @param $string
     * @return array|string|null
     */
    public static function trans($string)
    {
        return ServiceProvider::trans($string);
    }

    /**
     * 初始化配置注入
     */
    public static function initConfig()
    {
        /**
         * 处理站点LOGO自定义
         */
        if (empty(admin_setting('site_logo'))) {
            $logo = admin_setting('site_logo_text');
        } else {
            $logo = config('app.url') . '/uploads/' . admin_setting('site_logo');
            $logo = "<img src='$logo'>";
        }

        /**
         * 处理站点LOGO-MINI自定义
         */
        if (empty(admin_setting('site_logo_mini'))) {
            $logo_mini = admin_setting('site_logo_text');
        } else {
            $logo_mini = config('app.url') . '/uploads/' . admin_setting('site_logo_mini');
            $logo_mini = "<img src='$logo_mini'>";
        }

        /**
         * 处理站点名称
         */
        if (empty(admin_setting('site_url'))) {
            $site_url = 'http://localhost';
        } else {
            $site_url = admin_setting('site_url');
        }

        /**
         * 复写admin站点配置
         */
        config([
            'app.url' => $site_url,

            'admin.title' => admin_setting('site_title'),
            'admin.logo' => $logo,
            'admin.logo-mini' => $logo_mini,
        ]);
    }
}
