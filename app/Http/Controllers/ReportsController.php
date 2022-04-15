<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function total()
    {
        return view('reports.total');
    }

    public function send(Request $request)
    {
        var_dump(in_array('news', $request->get('requested')));
        dd(request()->query);
    }
}
