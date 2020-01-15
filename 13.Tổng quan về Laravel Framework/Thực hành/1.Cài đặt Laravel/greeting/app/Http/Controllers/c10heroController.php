<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class c10heroController extends Controller
{
    public function index()
    {
        $c10hero = DB::select('select* from class');
        return view('c10hero.index')->with('c10hero', $c10hero);
    }
}
