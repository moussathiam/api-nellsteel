<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'quantity', 'deliver', 'unload', 'status'];

    public function customer()
    {
        return $this->belongsTo(Customer::class)->first();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'budget_products')->withPivot('quantity')->get();
    }
}
