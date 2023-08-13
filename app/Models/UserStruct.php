<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @method static create(array $user_structs)
 * @method static whereNull(string $string)
 * @method static find(mixed $parent_id)
 * @method static leftJoin(string $string, string $string1, string $string2, string $string3)
 */
class UserStruct extends Model
{
    use HasFactory;
    use NodeTrait;

    protected $primaryKey = 'id'; // Проверьте имя первичного ключа
    protected $fillable = [
        'position',
        'status',
        'is_department',
        'hid',
        'department_id',
        'register_contacts',
        'department_hr',
        'parent_id',
        '_lft',
        '_rgt'
    ];

   public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

}
