<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;
    protected $table = 'addresses';
    protected $primaryKey = 'add_id';
    public $timestamps = false;
    protected $guarded = [];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'u_id', 'u_id');
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'c_id', 'c_id');
    }
}
