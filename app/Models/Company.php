<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'logo',
    ];

    // realtion company with users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // relation company with teams
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
    // relation company with roles
    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
