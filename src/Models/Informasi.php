<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use IkamiAdm\Traits\InformasiTrait;

class Informasi extends Model
{
    use CrudTrait;
    use InformasiTrait;

    protected $table = 'informasi';
    
    protected $guarded = ['id'];
    
    public function area()
    {
        return $this->belongsTo('IkamiAdm\Models\Area');
    }

    public function asesmen()
    {
        return $this->belongsTo('IkamiAdm\Models\Asesmen');
    }

    public function jawaban1() {
        return $this->belongsTo('IkamiAdm\Models\Jawaban', 'jawaban_1');
    }

    public function jawaban2() {
        return $this->belongsTo('IkamiAdm\Models\Jawaban', 'jawaban_2');
    }

}
