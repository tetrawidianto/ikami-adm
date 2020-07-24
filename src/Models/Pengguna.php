<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use IkamiAdm\Scopes\PenggunaScope;
use IkamiAdm\Traits\StatusTrait;

class Pengguna extends Model
{
    use CrudTrait;
    use StatusTrait;
    
    protected $table = 'pengguna';
    
    protected $guarded = ['id'];
    
    protected static function booted()
    {
        static::addGlobalScope(new PenggunaScope);
    }

    public function user()
    {
        return $this->belongsTo('IkamiAdm\Models\User');
    }

    public function penyedia()
    {
        return $this->belongsTo('IkamiAdm\Models\Penyedia');
    }

}
