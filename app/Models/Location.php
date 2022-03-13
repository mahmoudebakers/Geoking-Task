<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  use HasFactory;

  protected $fillable = ['lat', 'lng', 'user_id', 'title',];

  public function locations()
  {
    return $this->belongsTo(User::class);
  }
}
