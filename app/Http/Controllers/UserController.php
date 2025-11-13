<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function index()
    {
        //
      // $users = User::with('teacher')->get();
        $users = User::with(['teacher', 'student'])->get();
        return response()->json($users);  
    }
}
