<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function soal_uts()
    {
        return view('soal.uts');
    }

    public function soal_uas()
    {
        return view('soal.uas');
    }

    public function tugas()
    {
        return view('soal.tugas');
    }
}
