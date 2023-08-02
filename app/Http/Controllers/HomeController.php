<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ResultMahany;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function import(Request $request)
    {
        Excel::import(new ResultMahany, $request->file('file'));
    }

}
