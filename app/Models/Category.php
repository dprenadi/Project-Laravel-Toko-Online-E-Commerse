<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $guarded = ['id'];

    protected $fillable = [
        'name', 'photo', 'slug'
    ];

    protected $hidden = [

    ];

    // public function products()
    // {
    //     // hasMany, karena satu caetgory memiliki banyak Products
    //     return $this->hasMany(Product::class);
    // }
}
