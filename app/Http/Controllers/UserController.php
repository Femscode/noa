<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard() {
        $user = Auth::user();
        if($user->type == 0) {
            return view('user.index');
        } else {
            return view('admin.index');
        }
    }
}
