<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    const STATUS_PENDING = 1;
    const STATUS_APPROVED = 2;
    const STATUS_REJECTED = 3;

    protected $casts = [
        'preference_response' => 'array'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity', 'price')->withTimestamps();
    }

    public function getTotalAttribute()
    {
        return $this->products->reduce(function($carry, $product) {
            return $carry + ($product->pivot->quantity * $product->pivot->price);
        }, 0);
    }

    public function getOrderId()
    {
        if (!$this->preference_response) {
            return null;
        }

        if (!isset($this->preference_response['collection_id'])) {
            return null;
        }
        
        return $this->preference_response['collection_id'];
    }

    public function isSuccessful()
    {
        return $this->status === self::STATUS_APPROVED;
    }

    public function getStatusMessage()
    {
        if ($this->status === self::STATUS_APPROVED) {
            return 'Tu compra fue exitosa';
        } elseif ($this->status === self::STATUS_PENDING) {
            return 'Tu compra está pendiente de aprobación';
        } else {
            return 'Tu compra fue rechazada';
        }
    }

    public function updateStatus()
    {
        $status = $this->preference_response['collection_status'];

        if ($status === 'approved') {
            $this->status = self::STATUS_APPROVED;
        } elseif ($status === 'in_process') {
            $this->status = self::STATUS_PENDING;
        } else {
            $this->status = self::STATUS_REJECTED;
        }

        $this->save();
    }
}
