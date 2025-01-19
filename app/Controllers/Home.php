<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('main');
    }

    public function studentForm()
    {
        return view('studentForm');
    }

    public function studentList()
    {
        return view('studentList');
    }
}
