<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
