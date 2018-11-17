<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function contact($nameR, $emailR, $phoneR) {
//        return view('pages/contact')->with('nameV', $nameR);
        return view('pages/contact', compact('nameR', 'emailR', 'phoneR'));
    }
}
