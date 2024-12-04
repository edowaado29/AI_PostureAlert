<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistanceStatus extends Model
{
    use HasFactory;
    protected $table = 'distance_status';
    protected $fillable = ['distance', 'status', 'timestamp'];
}
