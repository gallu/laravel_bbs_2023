<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    //
    public function index() {
        return view('bbs/index');
    }
    //
    public function create(Request $req) {
        \Log::debug('ok');
        $all = $req->all();
        \Log::debug($all);
        
        return redirect()->route('bbs.index');
    }
}
