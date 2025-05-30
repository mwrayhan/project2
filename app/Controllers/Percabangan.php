<?php

namespace App\Controllers;

class Percabangan extends BaseController
{
    public function index(): string
    {
        return view('v_percabangan');
    }
}
