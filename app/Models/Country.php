<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $guarded = ['id'];

    public function companies()
    {
        return $this->hasMany(Company::class, 'country_id', 'id');
    }
}
