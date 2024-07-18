<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Npc extends Model
{
    use HasFactory;
    protected $table = 'npc';
    
    public function raidbossSpawnlist(): HasOne{
        return $this->hasOne(raidbossSpawnlist::class,'boss_id','id');
    }
}
