<?php

namespace Celaraze\DcatPlus\Extensions\Show;

use Dcat\Admin\Show\AbstractField;
use Illuminate\Support\Facades\Storage;

class Video extends AbstractField
{
    public function render($server = '', $width = 200, $height = 200)
    {
        $items = json_decode($this->value, true);
        $return = '';
        foreach ($items as $item) {
            if (url()->isValidUrl($item)) {
                $src = $item;
            } elseif ($server) {
                $src = rtrim($server, '/') . '/' . ltrim($item, '/');
            } else {
                $disk = config('admin.upload.disk');

                if (config("filesystems.disks.{$disk}")) {
                    $src = Storage::disk($disk)->url($item);
                } else {
                    return '';
                }
            }
            $return .= "<video src='$src' autoplay loop style='max-width:{$width}px;max-height:{$height}px'></video> &nbsp;";
        }
        return $return;
    }
}
