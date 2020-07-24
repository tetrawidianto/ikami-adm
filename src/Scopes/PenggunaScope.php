<?php

namespace IkamiAdm\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use IkamiAdm\Models\Status;

class PenggunaScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->whereHas('penyedia', function(Builder $query) {
            $query->currentStatus(Status::DITERIMA);
        });
    }
}