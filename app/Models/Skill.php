<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
  use HasFactory;

  protected $fillable = [
    'type',
    'effect'
  ];

  protected $hidden = [
    'id',
    'created_at',
    'updated_at'
  ];

  public function heroes()
  {
    return $this->belongsToMany(Hero::class);
  }
}
