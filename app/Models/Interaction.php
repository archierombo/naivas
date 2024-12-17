<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interaction extends Model
{
     use HasFactory;

    // The table associated with the model
    protected $table = 'interaction';

    // Fields that can be mass-assigned
    protected $fillable = [
        'customer_id',
        'product_id',
        'interaction_type',
        'rating',
    ];



    // Relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}



