<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    //
    public function index() {
        return view('bbs/index');
    }
}
