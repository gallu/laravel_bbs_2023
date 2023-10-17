<?php

namespace App\Http\Controllers;

use App\Http\Requests\BbsPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BbsController extends Controller
{
    //
    public function index() {
        return view('bbs/index');
    }
    //
    public function create(BbsPostRequest $req) {
        // バリデーション済みデータの取得
        $validated = $req->validated();
        \Log::debug($validated);
        
        return redirect()->route('bbs.index');
    }
}
