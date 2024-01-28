<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;
use Illuminate\Support\Facades\File;

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

    // Custom methods

    public function getPreview ()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'createdBy' => $this->createdBy,
            'discovery_year' => $this->discovery_year,
            'origin' => $this->origin,
            'thumbnail' => $this->thumbnail->image,
            'description' => $this->description
        ];
    }

   protected static function booted()
    {
        static::deleting(function ($collection) {
            foreach ($collection->images as $image) {
                File::delete(public_path("/storage/images/collection/" . pathinfo($image->image)["basename"]));
            }
            $collection->images()->delete();
        });
    }
}
