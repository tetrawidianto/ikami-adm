<?php

namespace IkamiAdm\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    const DITERIMA = 'success';
    const DITOLAK = 'danger';
    const MENUNGGU = 'warning';

    const SA = 'info';
    const DA = 'primary';

    const MASUK = 'danger';
    const TERJADWAL = 'warning';
    const BERLANGSUNG = 'info';
    const SELESAI = 'success';
}
