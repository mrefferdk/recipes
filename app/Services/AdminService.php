<?php


namespace App\Services;

use Illuminate\Http\Request;


class AdminService
{
    const EDIT_MODE_SESSION_KEY = 'isEditMode';


    public static function isEditMode()
    {
        return self::getSession();
    }

    public static function toggleEditMode()
    {
        session([self::EDIT_MODE_SESSION_KEY => !self::getSession()]);
    }

    private static function getSession()
    {
        return session(self::EDIT_MODE_SESSION_KEY, false);
    }

}
