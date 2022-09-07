<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function companies(){
        return $this->belongsToMany(Company::class, 'company_category',
            'company_id', 'category_id');
    }
}
