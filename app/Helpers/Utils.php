<?php

namespace App\Helpers;

use Carbon\Carbon;

class Utils
{
    /**
     * @throws \Exception
     */

    public static function getCurrentDatetime(): string
    {
        $now = Carbon::now('Africa/Lagos');
        return $now->toDateTimeString();
    }
}
