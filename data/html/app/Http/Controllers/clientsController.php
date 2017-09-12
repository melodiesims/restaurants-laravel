<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurants extends Model
{
    protected $fillable = ['id', 'nom', 'prenom','adresse','cp','ville','date_de_naissance','mail','tel','date_inscription','mot_de_passe','session','id_reservation'];

    public function posts(){
        return $this->hasMany('App\Post');
    }
}