<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
use IkamiAdm\Traits\StatusTrait;

class SistemEl extends Model
{
    use CrudTrait;
    use StatusTrait;
    
    protected $table = 'sistem_el';
    
    protected $guarded = ['id'];
    
    public function penyedia()
    {
        return $this->belongsTo('IkamiAdm\Models\Penyedia');
    }

    public function asesi()
    {
        return $this->hasMany('IkamiAdm\Models\Asesi');
    }

    public function inisiator()
    {
        return $this->morphTo();
    }

    public function sektor()
    {
        return $this->belongsTo('IkamiAdm\Models\Sektor');
    }

    public function subsektor()
    {
        return $this->belongsTo('IkamiAdm\Models\Subsektor');
    }

    public function asesmen()
    {
        return $this->hasMany('IkamiAdm\Models\Asesmen');
    }

    public function latestDa()
    {
        return $this->hasOne('IkamiAdm\Models\Asesmen')->where('selesai', true)->latest();
    }

    public function va()
    {
        return $this->hasOne('IkamiAdm\Models\Va')->latest();
    }
}
