<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    use HasFactory;
    // protected $table = 'contents';

    // เข้าถึงได้ทุก colunm
    protected $fillable = [

    ];
        // join table coures
    public function coures(){
        return $this->belongsTo(Coures::class);
    }
}


