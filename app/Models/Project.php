<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'projects';
    public function cdsname()
    {
        return $this->belongsTo(CdsGroup::class,'cdsgroup','id');
    }
}
