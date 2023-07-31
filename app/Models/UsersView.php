<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class UsersView extends Model
{
    use HasFactory;

    public static function view()
    {
      /*  return DB::statement("
            create view view_user_struct as
            select user_structs.id, parent_id, position, user_structs.status, is_department, department_id, register_contacts,fio,password,password_hash
            from user_structs LEFT JOIN users
            ON user_structs.id = users.user_struct_id;
        ");*/
    }


    /*public function children(): HasMany
    {
        return $this->hasMany(UsersView::class, 'parent_id', 'id');
    }*/
}
