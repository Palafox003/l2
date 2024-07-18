<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RaidbossSpawnlist extends Model
{
    use HasFactory;
    protected $table = 'raidboss_spawnlist';
    
    public function npc(): BelongsTo{
        return $this->belongsTo(Npc::class,'boss_id','id');
    }
}
