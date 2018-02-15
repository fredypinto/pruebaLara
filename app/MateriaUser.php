<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaUser extends Model
{
    
protected $table ='materia_users';
     protected $fillable = [
        'user_id', 'pofesor_id', 'materia_id',
    ];

  public function  user(){
  	return $this->hasMany(user::class);
  }
}

