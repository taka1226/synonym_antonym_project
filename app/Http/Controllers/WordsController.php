<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Word;

class WordsController extends Controller
{
    //words の一覧を表示する
    public function index()
    {
        $words = DB::table('words')->get();
        $groups = DB::table('groups')->get();
        return view('words.index', [
            'words' => $words,
            'groups' => $groups
        ]);
    }

    //words の追加
    public function add(Request $request)
    {
        $inputs = $request->all();
        DB::beginTransaction();
        try {
            DB::table('words')->insert([
                'name' => $inputs['name'],
                'meaning' => $inputs['meaning'],
                'synonym_group_id' => $inputs['synonym_group_id'],
                'antonym_group_id' => $inputs['antonym_group_id']
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect(route('words'));
    }
}
