<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {
        return view('index', [
            'users' => User::all(),
            'subdomain' => $request->subdomain()
        ]);
    }
}
