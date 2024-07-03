<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //Protegiendo que no se pueda crear registros de manera masiva en los campos:
    protected $guarded =
    [
        'id','created_at', 'updated_at'
    ];

}
