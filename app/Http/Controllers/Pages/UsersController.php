<?php

namespace App\Http\Controllers\Pages;

class UsersController
{
 
    public function index()  {
        return view('pages.users.index');
    }

    public function new() {
        return view('pages.users.detail');
    }
}
