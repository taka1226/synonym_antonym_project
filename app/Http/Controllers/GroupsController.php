<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupsController extends Controller
{
    //
    public function index()
    {
        $groups = DB::table('groups')->get();
        return view('groups.index', [
            'groups' => $groups
        ]);
    }
}
