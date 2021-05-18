<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'telephone', 'entreprise', 'password', 'status'];
    
    public function budgets()
    {
        return $this->hasMany(Budget::class)->get();
    }
}
