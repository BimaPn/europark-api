<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Collection extends Model
{
    use HasFactory, UUID;

    protected $guarded = [];
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;

    // Relation
    public function thumbnail ()
    {
        return $this->hasOne(CollectionImage::class)->oldest();
    }
    public function images ()
    {
        return $this->hasMany(CollectionImage::class);
    }
}
