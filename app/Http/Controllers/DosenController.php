<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama = "Alex Jhosan Abdillah";
        $arraye = ["Korpora", "Konsulting", 2323];
        return view('biodata', ['nama2' => $nama, 'arry' => $arraye]);
    }
}
