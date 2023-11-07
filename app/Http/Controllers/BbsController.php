<?php

namespace App\Http\Controllers;

use App\Http\Requests\BbsPostRequest;
use App\Models\LaravelBbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BbsController extends Controller
{
    //
    public function index() {
        // $data = LaravelBbs::all();
        // $data = LaravelBbs::orderBy("created_at", "desc")->get();
        $data = LaravelBbs::orderBy("created_at", "desc")
            ->limit(20)
            ->get();
// var_dump( $data->toArray() );

        $context = [
            "test" => "AAA",
            "data" => $data->toArray(),
        ];

        return view('bbs/index', $context);
    }
    //
    public function create(BbsPostRequest $req) {
        // バリデーション済みデータの取得
        $validated = $req->validated();

        //　書き込みブラウザと書き込み元IPアドレスを把握する
        $validated['user_agent'] = $req->userAgent();
        $validated['from_ip'] = $req->header('X-Forwarded-For') ?? $req->ip();
        \Log::debug($validated);

        // 書き込む
        LaravelBbs::create($validated);

        return redirect()->route('bbs.index');
    }
}
