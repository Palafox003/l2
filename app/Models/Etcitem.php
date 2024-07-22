<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etcitem extends Model
{
    use HasFactory;
    protected $table = 'etcitem';
    protected $primaryKey = 'item_id';
}
