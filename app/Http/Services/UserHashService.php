<?php

namespace App\Http\Services;

class UserHashService
{
    /**
     * This method only has a User in Web routes NOT api routes.
     * @return string
     */
    public static function getUserHash(): string
    {
        return self::getUserHashById(Auth()->user()->id);
    }

    /**
     * Use this in API routes where you can provide a user id from the request
     * @param int $userId
     * @return string
     */
    public static function getUserHashById(int $userId): string
    {
        return sha1(config('app.key') . $userId);
    }
}
