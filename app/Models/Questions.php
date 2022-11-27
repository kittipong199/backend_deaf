<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = [ ];
        // join table coures
    public function coures(){
        return $this->belongsTo(Coures::class);
    }
}
