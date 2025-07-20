<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'careerNumber',
        'phone',
        'title',
        'description',
        'priority',
        'employee_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    
    public function comments()
{
    return $this->hasMany(Comment::class);
}

public function assignedEmployee()
{
    return $this->belongsTo(Employee::class, 'assigned_to');
}


}
