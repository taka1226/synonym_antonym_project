<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WordsController extends Controller
{
    //words の一覧を表示する
    public function index()
    {
        $words = DB::table('words')->get();
        dd($words);

    }
}
