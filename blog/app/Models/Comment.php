<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //Protegiendo que no se pueda crear registros de manera masiva en los campos:
    protected $guarded =
    [
        'id','created_at', 'updated_at'
    ];

    //Relation 1:M INVERSA

    public function user(){
        return $this->belongsTo(User::class);
    }

        //Relation 1:M inversa
        public function article(){
            return $this->belongsTo(Article::class);
        }
}
