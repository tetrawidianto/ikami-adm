<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use IkamiAdm\Traits\AreaUtamaTrait;

class AreaUtama extends Model
{
    use CrudTrait;
    use AreaUtamaTrait;
    
    protected $table = 'area_utama';
    
    protected $guarded = ['id'];
    
    protected $casts = ['ekstra' => 'array'];

    public function asesmen()
    {
        return $this->belongsTo('IkamiAdm\Models\Asesmen');
    }

    public function kematanganBaru()
    {
        return $this->belongsTo('IkamiAdm\Models\KematanganBaru');
    }

    public function area()
    {
        return $this->belongsTo('IkamiAdm\Models\Area');
    }

}
