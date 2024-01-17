<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class TicketQuantity extends Model
{
    use UUID, HasFactory;

    protected $guarded = ["id"];
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
