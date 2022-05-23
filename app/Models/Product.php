<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    // protected $fillable = [
    //     'name', 'users_id', 'categories_id', 'price', 'description', 'slug'
    // ];
    // protected $with = ['product'];

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search'] ?? false, function($query, $search) {
        return $query->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        });

        // $query->when($filters['product'] ?? false, fn($query, $product) => 
        // $query->whereHas('product', fn($query) =>
        // $query->where('name', $product)
        // ));
    }

    public function galleries(){
        return $this->hasMany( ProductGallery::class, 'products_id', 'id' );
    }

    public function discount(){
        return $this->hasOne( Discount::class, 'id', 'products_id' );
    }

    // public function discount(){
    //     return $this->belongsTo( Discount::class, 'products_id', 'id' );
    // }

    public function user(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }

    public function category(){
        return $this->belongsTo( Category::class, 'categories_id', 'id');
    }

}
