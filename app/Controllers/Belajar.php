<?php

namespace App\Controllers;

class Belajar extends BaseController
{
    public function index(): string
    {
        return view('v_belajar');
    }
}
