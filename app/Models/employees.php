<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;

    protected $fillable =
        ['firstname',
        'lastname',
        'companyName',
        'email',
        'phone',
        ];
    // Table Name in Which Data is going to be inserted
    protected $table = 'employees';
    // Disabling the default columns created_at and updated_at
    public $timestamps = false;
}
