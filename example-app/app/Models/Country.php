<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Country
 * @package App\Models
 *
 *
 *
 *
 */
class Country extends Model
{
    use HasFactory;

    public $timestamps = false; //если не нужный тайм стемпы

//    protected $hidden = ['name'];

    protected $fillable = [
        'name',
        'continent_name',
        'my_data',

    ];
    protected $casts = [
        'my_data' => 'array',
    ];

//    protected $guarded = [];
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
