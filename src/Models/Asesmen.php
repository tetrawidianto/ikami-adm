<?php

namespace IkamiAdm\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
use IkamiAdm\Traits\AsesmenTrait;
use IkamiAdm\Traits\StatusTrait;

class Asesmen extends Model
{
    use CrudTrait;
    use AsesmenTrait;
    use StatusTrait;

    protected $table = 'asesmen';
    
    protected $guarded = ['id'];
    
    protected $dates = ['jadwal'];

    protected $casts = ['dokumen_terkait' => 'array'];

    public function sistemEl()
    {
        return $this->belongsTo('IkamiAdm\Models\SistemEl');
    }

    public function versi()
    {
        return $this->belongsTo('IkamiAdm\Models\Versi');
    }

    public function informasi() {
        return $this->hasMany('IkamiAdm\Models\Informasi');
    }

    public function aspekSuplemen()
    {
        return $this->hasMany('IkamiAdm\Models\AspekSuplemen');
    }

    public function areaUtama()
    {
        return $this->hasMany('IkamiAdm\Models\AreaUtama')->orderBy('area_id');
    }

    public function kategoriSistemEl()
    {
        return $this->belongsTo('IkamiAdm\Models\KategoriSistemEl');
    }

    public function asesor()
    {
        return $this->belongsToMany('IkamiAdm\Models\User', 'penugasan');
    }

    public function opini()
    {
        return $this->belongsTo('IkamiAdm\Models\Opini');
    }

    public function terjawabSemua()
    {
        return ($this->total + $this->total_utama + $this->total_suplemen) == ($this->terjawab + $this->terjawab_utama + $this->terjawab_suplemen);
    }

    public function terevaluasiSemua()
    {
        return ($this->total + $this->total_utama + $this->total_suplemen) == ($this->terjawab_baru + $this->terjawab_utama_baru + $this->terjawab_suplemen_baru);
    }

    public function getPertanyaan() {
        return $this->versi->pertanyaan()->with(['informasi' => function($query) {
            $query->where('asesmen_id', $this->id);
        }]);
    }

    public function dokumenDa()
    {
        return $this->hasMany('IkamiAdm\Models\DokumenDa');
    }

}
