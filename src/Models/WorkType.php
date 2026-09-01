<?php

declare(strict_types=1);

namespace Liberu\CRM\FieldServiceCoordination\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $code @property bool $active */
final class WorkType extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_field_service_work_types';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['requirements' => 'array', 'active' => 'boolean'];
    }
}
