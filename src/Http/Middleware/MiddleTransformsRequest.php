<?php

namespace Celaraze\DcatPlus\Http\Middleware;

use App\Http\Middleware\TrimStrings;
use Mews\Purifier\Facades\Purifier;

class MiddleTransformsRequest extends TrimStrings
{
    protected function transform($key, $value)
    {
        $value = Purifier::clean($value, array('AutoFormat.AutoParagraph' => false));
        return parent::transform($key, $value);
    }
}
