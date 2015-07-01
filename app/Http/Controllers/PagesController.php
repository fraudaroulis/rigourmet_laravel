<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Responds to requests to GET /
     */
    public function getLandingPage()
    {
        return view('landingPage');
    }
}
