<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'description',
    ];
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
    public function professor()
    {
        return $this->hasOne(Professor::class);
    }
    
}
