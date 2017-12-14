<?php

/**
 *	Generated by IceTea Framework 0.0.1
 *	Created at 2017-12-14 10:50:05
 *	Namespace App\Http\Controllers
 */

namespace App\Http\Controllers;

use App\User;
use App\Login;
use IceTea\Http\Controller;

class ProfileController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

    public function index()
    {
    	return view('user/profile', [
    		"info" => User::getInfo(Login::getUserId(), "a.user_id")
    	]);
    }
}
