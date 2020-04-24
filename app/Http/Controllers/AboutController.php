<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {   
        $user = User::first();
    }
}
