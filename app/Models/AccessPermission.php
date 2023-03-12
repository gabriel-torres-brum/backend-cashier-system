<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessPermission extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'permissions'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
