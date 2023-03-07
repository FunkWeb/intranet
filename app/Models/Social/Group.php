<?php

namespace App\Models\Social;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'required_role',
    ];

    /*
     * Relationships
     */

    /**
     * Get the posts for the group.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
