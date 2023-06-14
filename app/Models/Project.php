<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Project extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function typemodel(): BelongsTo
    {
        return $this->belongsTo(Typemodel::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);

    }
}
