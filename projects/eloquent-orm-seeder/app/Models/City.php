<?php

namespace App\Models;

use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $primaryKey = 'c_id';
    public $timestamps = false;
    protected $guarded = [];
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'c_id', 'c_id');
    }
}
