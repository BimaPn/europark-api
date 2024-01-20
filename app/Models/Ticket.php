<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Ticket extends Model
{
    use HasFactory, UUID;

    protected $guarded = [];
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;

    // Custom Methods
    public function checkExpired ()
    {
        $now = Carbon::now()->format('Y-m-d');
        return $this->visit_date < $now;
    }
    public function getDetail ()
    {
        $quantity = $this->quantity->map(function ($item) {
            return [
                'type' => $item->type,
                'quantity' => $item->quantity,
                'total_price' => $item->total_price,
            ];
        });
        return [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "visit_date" => $this->visit_date,
            "identity_card" => $this->identity_card_picture,
            "verified" => $this->verified ? true : false,
            "whatsapp_number" => $this->whatsapp_number,
            "institute_name" => $this->institute_name,
            "institute_address" => $this->institute_address,
            "schedule" => $this->schedule->schedule,
            "quantity" => $quantity
        ];
    }

    // Relations
    public function schedule ()
    {
        return $this->belongsTo(Schedule::class);
    }
    public function quantity ()
    {
        return $this->hasMany(TicketQuantity::class);
    }


}
