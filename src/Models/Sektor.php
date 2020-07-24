<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Sektor extends Model
{
    use CrudTrait;

    protected $table = 'sektor';
    
    protected $guarded = ['id'];

    public function users()
    {
    	return $this->belongsToMany('IkamiAdm\Models\User');
    }

    public function asesmen()
    {
    	return $this->hasManyThrough('IkamiAdm\Models\Asesmen', 'IkamiAdm\Models\SistemEl');
    }

    public function sistemEl()
    {
        return $this->hasMany('IkamiAdm\Models\SistemEl');
    }
}
