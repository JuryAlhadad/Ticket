<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    public function comments()
{
    return $this->hasMany(Comment::class);
}

}
