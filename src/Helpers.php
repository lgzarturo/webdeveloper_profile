<?php

declare(strict_types=1);

namespace Helpers;

class Helpers {
    public static function sanitize_lang($lang)
    {
        if ($lang !== 'es' && $lang !== 'en') {
            $lang = 'es';
        }
        return $lang;
    }
}
