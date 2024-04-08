<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'level',
        'c_route',
        'type_id',
    ];
    public function type():BelongsTo{
        return $this->belongsTo(Types::class);
    }
    public function users():BelongsToMany{
        return $this->belongsToMany(User::class, 'course_user');
    }
    public function lang():BelongsTo{
        return $this->belongsTo(ProgLang::class);
    }
}
