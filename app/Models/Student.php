<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'fullname',
        'email',
        'phone'
    ];

    public function studentDetail()
    {
        return $this->hasOne(StudentDetail::class, 'student_id', 'id');
    }
}
