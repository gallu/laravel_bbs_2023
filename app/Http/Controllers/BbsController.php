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

        //　書き込みブラウザと書き込み元IPアドレスを把握する
        $validated['user_agent'] = $req->userAgent();
        $validated['from_ip'] = $req->header('X-Forwarded-For') ?? $req->ip();

        \Log::debug($validated);



        return redirect()->route('bbs.index');
    }
}
