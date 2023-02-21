<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model {
    use HasFactory;
    protected $fillable = ['board_id', 'name', 'description'];

    public function board() {
        return $this->belongsTo(Board::class);
    }
}
