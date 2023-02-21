<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller {

    public function add(Request $input) {
        Board::create([
            'user_id' => Auth::user()->id,
            'name' => $input->name
        ]);
        return redirect()->route('home');
    }

    public function remove(Board $board) {
        if (Auth::user()->id == $board->user_id) {
            $board->delete();
        }
        return redirect()->route('home');
    }
}
