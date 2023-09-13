<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'classrooms_id',
        'material',
        'date',
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classrooms_id', 'id');
    }
}
