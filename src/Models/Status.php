<?php

namespace IkamiAdm\Models;

use Spatie\ModelStatus\Status as ModelStatus;

class Status extends ModelStatus
{
    protected $table = 'statuses';

    const DITERIMA = 'diterima';
    const DITOLAK = 'ditolak';
    const MENUNGGU = 'menunggu';

    const SA = 'self-assessment';
    const DA = 'desktop-assessment';

    const MASUK = 'masuk';
    const TERJADWAL = 'terjadwal';
    const BERLANGSUNG = 'berlangsung';
    const SELESAI = 'selesai';

    public function user()
    {
    	return $this->belongsTo('IkamiAdm\Models\User');
    }
}
