<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    //Protegiendo que no se pueda crear registros de manera masiva en los campos:
    protected $guarded =
    [
        'id','created_at', 'updated_at'
    ];

    //Relacion de 1:1 inversa
    public function user (){
        return $this->belongsTo(User::class);
    }

     
}
