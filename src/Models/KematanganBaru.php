<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class KematanganBaru extends Model
{
    use CrudTrait;

    protected $table = 'kematangan_baru';
    
    protected $guarded = ['id'];
    
    public function pemeringkatan()
    {
        return $this->hasMany('IkamiAdm\Models\Pemeringkatan');
    }

}
