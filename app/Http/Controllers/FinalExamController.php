<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinalExamPostRequest;
// use App\Models\LaravelBbs;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Log;

class FinalExamController extends Controller
{
    //
    public function index() {
        return view('final_exam/index', []);
    }

    //
    public function create(FinalExamPostRequest $req) {
        // バリデーション済みデータの取得
        $validated = $req->validated();
        // var_dump($validated);

        return view('final_exam/create', $validated);
        // return redirect()->route('final_exam.index');
    }

}
