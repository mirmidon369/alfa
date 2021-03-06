<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personas_imagenes extends Model
{
    //
    protected $table = 'personas_imagenes';
    protected $primaryKey = 'id';
    public $timestamps=false;

    protected $fillable = ['id_persona','imagen','estado'];

    public function persona()
    {
    	return $this->belongsTo(personas::class,'id_persona','id_persona');
    }
}
