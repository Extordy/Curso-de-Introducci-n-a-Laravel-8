<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //funcion para hacer la relacion un curso pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //funcion para hacer lelacion de que un curso tiene muchos post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //creacion de campo virtuial get"nombre"Attribute
    public function getExcerptAttribute()
    {
        //extraer string 
        return substr($this->description,0,80) . "...";
    }

    //metodo personalizado para que busque deacuerdo con la categoria respecto 
    //al curso que se esta visualizando
    // with con relacion con el usuario
    public function similar()
    {
        return $this->where('category_id', $this->category_id)
            ->with('user')
            ->take(2)
            ->get();
    }
}
