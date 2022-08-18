<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Country
 *
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $continent_name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string $data
 * @property array|null $my_data
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\City[] $cities
 * @property-read int|null $cities_count
 * @method static \Database\Factories\CountryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereContinentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereMyData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @mixin \Eloquent
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
    /**
     * @var mixed
     */
    public $name;

    public function cities(): HasMany
    {
        return $this->hasMany('App\Models\City');
    }
}
