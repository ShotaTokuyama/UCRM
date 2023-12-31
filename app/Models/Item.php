<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchases;

class Item extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'memo',
    'price',
    'is_selling',
  ];

  public function Purchases()
  {
    return $this->belongsToMany(Purchases::class)->withPivot('quantity');
  }
}
