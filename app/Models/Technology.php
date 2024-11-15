<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    // Specifica la tabella associata al Model
    protected $table = 'technology';

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}