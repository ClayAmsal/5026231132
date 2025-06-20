<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageCounterDBController extends Controller
{
    public function index()
    {
        DB::table('pagecounter')->where('id', 1);
        $jumlah = DB::table('pagecounter')->where('id', 1)->value('Jumlah');
        return view('indexpagecounter', compact('jumlah'));
    }

    public function tambah()
    {
        DB::table('pagecounter')->where('id', 1)->increment('Jumlah');
        $jumlah = DB::table('pagecounter')->where('id', 1)->value('Jumlah');
        return redirect("/pagecounter");
    }
}
