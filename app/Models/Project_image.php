<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_image extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'image'];
}
