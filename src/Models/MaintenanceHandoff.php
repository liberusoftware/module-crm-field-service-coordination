<?php

declare(strict_types=1);

namespace Liberu\CRM\FieldServiceCoordination\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $appointment_id @property string $status */
final class MaintenanceHandoff extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_field_service_handoffs';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['payload' => 'array', 'handed_off_at' => 'datetime'];
    }
}
