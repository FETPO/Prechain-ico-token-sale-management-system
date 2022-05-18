<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    public function tuser(){
    	return $this->belongsTo(User::class, 'user');
    }

    public function stage(){
    	return $this->belongsTo(Stage::class, 'stage', 'id');
    }
}
