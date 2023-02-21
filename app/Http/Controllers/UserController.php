<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $user = auth()->user();
        $boards = $user->boards;
        $tasks = $user->tasks;

        return view('home', compact('boards', 'tasks'));
    }
}
