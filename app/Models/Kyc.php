<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    use HasFactory;
    public function kuser(){
    	return $this->belongsTo(User::class, 'user');
    }
}
