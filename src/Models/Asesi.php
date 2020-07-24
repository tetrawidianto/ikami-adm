<?php

namespace IkamiAdm\Models;

use IkamiAdm\Scopes\AsesiScope;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use IkamiAdm\Traits\StatusTrait;

class Asesi extends Model
{
    use CrudTrait;
    use StatusTrait;

    protected $table = 'asesi';
    
    protected $guarded = ['id'];
    
    protected static function booted()
    {
        static::addGlobalScope(new AsesiScope);
    }

    public function sistemEl()
    {
        return $this->belongsTo('IkamiAdm\Models\SistemEl');
    }

    public function user()
    {
        return $this->belongsTo('IkamiAdm\Models\User');
    }

}
