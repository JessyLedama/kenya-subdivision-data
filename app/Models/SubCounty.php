<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\County;

class SubCounty extends Model
{
    use HasFactory;
    // use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $fillable = [
        'name',
        'county_id',
    ];

    // A sub county belongs to a county.
    public function county(){
        return $this->belongsTo(County::class);
    }

    public function region(){
        return $this->belongsToThrough(Region::class, County::class);
    }
}
