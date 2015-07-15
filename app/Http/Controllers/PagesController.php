<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Socialize;

class PagesController extends Controller
{
    /**
     * Responds to requests to GET /
     */
    public function getLandingPage()
    {
		$user = Socialize::with('facebook')->user();

		// OAuth Two Providers
		$token = $user->token;

		// OAuth One Providers
		$token = $user->token;
		$tokenSecret = $user->tokenSecret;

		// All Providers
		$user->getId();
		$user->getNickname();
		$user->getName();
		$user->getEmail();
		$user->getAvatar();

		$test = 'test';

        return view('landingPage', compact('test'))->with('user', $user);
    }
}
