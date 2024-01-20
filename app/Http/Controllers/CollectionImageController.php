<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\UUID;

class CollectionImageController extends Controller
{
    use HasFactory, UUID;

    protected $guarded = [];
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
