<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    //Protegiendo que no se pueda crear registros de manera masiva en los campos:
    protected $guarded =
    [
        'id','created_at', 'updated_at'
    ];


    // //Relacion de usuarios y articles 1:M INVERSA

    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relation 1:M

    public function comments(){
        return $this->hasMany(Comment::class);
    }

     //RELATION 1:M INVERSA
     public function category(){
        return $this->belongsTo(Category::class);
     }
}
