<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function rpl()
    {
        return view('rpl');
    }

    public function dkv()
    {
        return view('dkv');
    }

    public function bd()
    {
        return view('bd');
    }

    public function akl()
    {
        return view('akl');
    }

    public function mp()
    {
        return view('mp');
    }

    public function kkbt()
    {
        return view('kkbt');
    }
}
