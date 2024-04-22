<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view ('login');
    }


    public function admin(){
        return view ('layout.dashboard');
    }

    public function petugas(){
        return view ('layout.petugas');
    }

    public function user(){
        return view ('user.user');
    }

    public function userCreate(){
        return view ('user.create');
    }

    public function userEdit(){
        return view ('user.edit');
    }
}
