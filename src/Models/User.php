<?php 

namespace IkamiAdm\Models;

use App\User as UserModel;

class User extends UserModel
{
	public function inisiasiPenyedia()
    {
        return $this->morphOne('IkamiAdm\Models\Penyedia', 'inisiator');
    }

    public function pengguna()
    {
        return $this->hasOne('IkamiAdm\Models\Pengguna');
    }

    public function inisiasiSistemEl()
    {
        return $this->morphMany('IkamiAdm\Models\SistemEl', 'inisiator')->latest();
    }

    public function sistemEl()
    {
        return $this->belongsToMany('IkamiAdm\Models\SistemEl', 'asesi');
    }

    public function asesi()
    {
        return $this->hasMany('IkamiAdm\Models\Asesi')->latest();
    }

    public function inisiasiAsesmen()
    {
        return $this->morphMany('IkamiAdm\Models\Asesmen', 'inisiator');
    }

    public function asesmen()
    {
        return $this->hasManyThrough(
            'IkamiAdm\Models\Asesmen',
            'IkamiAdm\Models\Asesi',
            'user_id',
            'sistem_el_id',
            'id',
            'sistem_el_id'
        )->latest();
    }

    public function asesor()
    {
        return $this->belongsToMany('IkamiAdm\Models\Asesmen', 'penugasan');
    }

    public function sektor()
    {
        return $this->belongsToMany('IkamiAdm\Models\Sektor');
    }
}