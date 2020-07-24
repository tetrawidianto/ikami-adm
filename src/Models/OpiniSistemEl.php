<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class OpiniSistemEl extends Model
{
    use CrudTrait;

    protected $table = 'opini_sistem_el';
    
    protected $guarded = ['id'];
    
    public function opini() 
    {
        return $this->belongsTo('IkamiAdm\Models\Opini');
    }

    public function kategoriSistemEl()
    {
        return $this->belongsTo('IkamiAdm\Models\KategoriSistemEl');
    }

}
