<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function login(Request $req)
    {
        $login = $req->get('login');
        $pass = $req->get('pass');

        return $req->all();
    }
}
