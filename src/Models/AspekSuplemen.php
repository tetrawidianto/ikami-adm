<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use IkamiAdm\Traits\AspekSuplemenTrait;

class AspekSuplemen extends Model
{
    use CrudTrait;
    use AspekSuplemenTrait;

    protected $table = 'aspek_suplemen';
    
    protected $guarded = ['id'];
    
    public function asesmen()
    {
        return $this->belongsTo('IkamiAdm\Models\Asesmen');
    }

    public function getPersentaseAttribute()
    {
        return number_format($this->skor / ($this->total * 3) * 100, 0, ',', '.');
    }

    public function aspek()
    {
        return $this->belongsTo('IkamiAdm\Models\Aspek');
    }
}
