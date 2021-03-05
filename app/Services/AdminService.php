<?php


namespace App\Services;

use Illuminate\Http\Request;


class AdminService
{
    const EDIT_MODE_SESSION_KEY = 'isEditMode';


    public function isEditMode()
    {
        return $this->getSession();
    }

    public function toggleEditMode()
    {
        session([self::EDIT_MODE_SESSION_KEY => !$this->getSession()]);
    }

    public function getSession()
    {
        return session(self::EDIT_MODE_SESSION_KEY, false);
    }

}
