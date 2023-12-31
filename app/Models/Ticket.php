<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'status',
        'service_type',
        'requester',
        'description',
        'priority'
    ];

}
