<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    //! Relaçao "many to one" com Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}