<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Aspek extends Model
{
    use CrudTrait;

    protected $table = 'aspek';

    protected $guarded = ['id'];

    public function pertanyaan()
    {
        return $this->hasMany('IkamiAdm\Models\Pertanyaan');
    }

    public function informasi()
    {
        return $this->hasMany('IkamiAdm\Models\Informasi');
    }

    public function aspekSuplemen()
    {
        return $this->hasMany('IkamiAdm\Models\AspekSuplemen');
    }

    public function area()
    {
        return $this->belongsTo('IkamiAdm\Models\Area');
    }
}
