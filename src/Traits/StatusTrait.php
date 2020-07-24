<?php

namespace IkamiAdm\Traits;

use Spatie\ModelStatus\Events\StatusUpdated;
use Spatie\ModelStatus\HasStatuses;

trait StatusTrait {
	use HasStatuses;

	public function setStatus(string $name, ?string $badge = 'light', ?string $reason = null): self
    {
        if (! $this->isValidStatus($name, $reason)) {
            throw InvalidStatus::create($name);
        }

        return $this->forceSetStatus($name, $badge, $reason);
    }

    public function forceSetStatus(string $name, ?string $badge = 'light', ?string $reason = null): self
    {
        $oldStatus = $this->latestStatus();

        $newStatus = $this->statuses()->create([
            'name'   => $name,
            'reason' => $reason,
            'badge' => $badge,
            'user_id' => auth()->id(),
        ]);

        event(new StatusUpdated($oldStatus, $newStatus, $this));

        return $this;
    }
}