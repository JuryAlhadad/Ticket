<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Models\Employee;

class Comment extends Model
{
    protected $fillable = ['ticket_id', 'employee_id', 'content'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

   public function employee()
{
    return $this->belongsTo(Employee::class, 'employee_id');
}

}
