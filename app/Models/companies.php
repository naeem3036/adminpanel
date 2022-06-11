<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class companies extends Model
{
    use HasFactory;

    protected $fillable =
        ['name',
        'email',
        'logo',
        'website',
        ];
    // Table Name in Which Data is going to be inserted
    protected $table = 'companies';
    // Disabling the default columns created_at and updated_at
    public $timestamps = false;
}
