<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $user_structs)
 * @method static whereNull(string $string)
 */
class UserStruct extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_parent',
        'position',
        'status',
        'id_buisnes_route',
        'is_department',
        'hid',
        'department_id',
        'register_contacts',
        'department_hr',
    ];


    public function children(): HasMany
    {
        return $this->hasMany(UserStruct::class, 'id_parent', 'id');
    }


}
