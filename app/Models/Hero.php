<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'health',
    'attack',
    'defence',
    'gear',
    'state',
    'immune'
  ];

  protected $hidden = [
    'id',
    'created_at',
    'updated_at',
    'pivot'
  ];

  public function skills()
  {
    return $this->belongsToMany(Skill::class);
  }

  public function weapons()
  {
    return $this->hasMany(Weapon::class);
  }
}
