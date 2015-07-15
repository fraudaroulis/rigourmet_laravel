<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Redirect;
use Socialize;

class AccountController extends Controller
{
    public function redirectToProvider() {
      return Socialize::with('facebook')->redirect();
    }

    public function handleProviderCallback() {
      $user = Socialize::with('facebook')->user();

      print_r($user);die;
    }
}
