<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Project extends Model
{
    use HasFactory;
    protected $fillable =['name', 'slug' , 'image', 'bodytext' , 'languages'];
    public function type(): BelongsTo
    {
        return $this->belongsTo(Typemodel::class);
    }
}
