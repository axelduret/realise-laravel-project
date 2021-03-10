<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'type',
    'damage'
  ];

  protected $hidden = [
    'id',
    'hero_id',
    'created_at',
    'updated_at'
  ];

  public function hero()
  {
    return $this->belongsTo(Hero::class);
  }
}
