<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SquadRoles extends Model
{
    use HasFactory;

    protected $table = "squad_roles";

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
