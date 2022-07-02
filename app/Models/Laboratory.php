<?php

namespace App\Models;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laboratory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['slug', 'number', 'isTheory'];

    /**
     * Get all of the computers for the Laboratory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computers(): HasMany
    {
        return $this->hasMany(Computer::class);
    }
}