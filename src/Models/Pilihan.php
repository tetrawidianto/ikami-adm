<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Pilihan extends Model
{
    use CrudTrait;

    protected $table = 'pilihan';
    
    protected $guarded = ['id'];
    
    public function jawaban()
    {
        return $this->belongsToMany('IkamiAdm\Models\Jawaban')->withTimestamps();
    }
}
