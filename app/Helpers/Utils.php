<?php

namespace App\Helpers;

use Carbon\Carbon;

class Utils
{
    /**
     * @throws \Exception
     */
    public static function generateConfirmationCode(): int
    {
        return random_int(1000000, 9999999);
    }

    public static function getCurrentDatetime(): string
    {
        $now = Carbon::now('Africa/Lagos');
        return $now->toDateTimeString();
    }
}
