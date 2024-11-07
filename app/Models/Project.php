<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "category",
        "tech_stack",
        "github_link",
        "creation_date"
    ];

     //! Relaçao "one to Many" com Project
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}