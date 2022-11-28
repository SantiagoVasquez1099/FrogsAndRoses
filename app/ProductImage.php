<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductImage extends Model
{

  protected $table = 'product_images';

  protected $guarded = ['id'];

  protected $fillable = [
    'name',
    'route',
    'product_id',
  ];
  
  protected $hidden = [
      'created_at',
      'updated_at'
  ];

  protected $dates = [
      'created_at',
      'updated_at'
  ];

  public function product(){
    return $this->belongsTo(Product::class);
  }
  
}
