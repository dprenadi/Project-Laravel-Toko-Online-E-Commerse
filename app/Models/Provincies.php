<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincies extends Model
{
    use HasFactory;

    // protected $table = 'provincies';

    // protected $guarded = [];

    /**
     * Province has many regencies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function cities()
    // {
    //     return $this->hasMany(City::class);
    // }
}
