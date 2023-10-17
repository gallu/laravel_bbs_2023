<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BbsController extends Controller
{
    //
    public function index() {
        return view('bbs/index');
    }
    //
    public function create(Request $req) {
        // validate
        $validator = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'title' => '',
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            \Log::debug('validate error');
            return redirect()->route('bbs.index')
                ->withErrors($validator)
                ->withInput();
        }

        // バリデーション済みデータの取得
        $validated = $validator->validated();
        \Log::debug($validated);
        
        return redirect()->route('bbs.index');
    }
}
