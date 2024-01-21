<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Visitors extends Model
{
    use HasFactory, UUID;

    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
