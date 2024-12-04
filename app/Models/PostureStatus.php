<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostureStatus extends Model
{
    use HasFactory;
    protected $table = 'posture_status';
    protected $fillable = ['status', 'timestamp'];
}
