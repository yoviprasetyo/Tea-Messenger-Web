<?php

/**
 *	Generated by IceTea Framework 0.0.1
 *	Created at 2017-12-14 12:34:36
 *	Namespace App\Http\Controllers\Auth
 */

namespace App\Http\Controllers\Auth;

use App\Login;

class Authenticated
{
    public static function login($code = 404)
    {
        if (! Login::isLoggedIn()) {
            abort($code);
            exit($code);
        }
    }
}