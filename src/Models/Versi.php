<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Versi extends Model
{
    use CrudTrait;

    protected $table = 'versi';

    protected $guarded = ['id'];

    public function area()
    {
        return $this->belongsToMany('IkamiAdm\Models\Area')->withTimestamps()->orderBy('created_at');
    }

    public function pertanyaan()
    {
        return $this->hasManyThrough(
            'IkamiAdm\Models\Pertanyaan',
            'IkamiAdm\Pivots\AreaVersi',
            'versi_id',
            'area_id',
            'id',
            'area_id'
        );
    }
}
