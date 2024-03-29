<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'email', 'whatsapp', 'gender', 'blog_link', 'work_file'
    ];

    /**
     * Get all of the follows for the Competition
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function follows(): HasMany
    {
        return $this->hasMany(Follow::class);
    }
}
