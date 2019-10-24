<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
      $users = User::all();
      return view('admin', compact('users'));
    }

    public function userdata(){
      $user = auth()->user();
      return view('game', compact('user'));
    }
}
