<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;
    protected $table ='chat';
    protected $fillable = ['message'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
