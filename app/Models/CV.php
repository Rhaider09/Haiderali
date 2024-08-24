<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'title', 'image', 'email', 'phone_no', 'website', 'address', 'description', 'uni_image','uni_name', 'uni_degree', 'uni_year'];
}
