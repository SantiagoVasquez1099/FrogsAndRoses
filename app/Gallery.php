<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Gallery extends Model
{

  protected $table = 'gallery';

  protected $guarded = ['id'];

  protected $fillable = [
    'name',
    'route'
  ];
  
  protected $hidden = [
      'created_at',
      'updated_at'
  ];

  protected $dates = [
      'created_at',
      'updated_at'
  ];
}
