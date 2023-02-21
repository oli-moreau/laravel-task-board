<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller {

    public function add(Request $input, Board $board) {
        Task::create([
            'board_id' => $board->id,
            'name' => $input->name,
            'description' => $input->description
        ]);
        return redirect()->route('home');
    }

    public function remove(Task $task) {
        $board = $task->board;

        if (Auth::user()->id == $board->user_id) {
            $task->delete();
        }
        return redirect()->route('home');
    }
}
