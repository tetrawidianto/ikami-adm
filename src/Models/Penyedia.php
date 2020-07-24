<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use IkamiAdm\Traits\StatusTrait;

class Penyedia extends Model
{
    use CrudTrait;
    use StatusTrait;

    protected $table = 'penyedia';

    protected $guarded = ['id'];

    public function inisiator()
    {
        return $this->morphTo();
    }

    public function pengguna()
    {
        return $this->hasMany('IkamiAdm\Models\Pengguna');
    }
}
