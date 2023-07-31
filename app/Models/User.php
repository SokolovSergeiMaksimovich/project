<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static whereNull(string $string)
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'login',
        'password_hash',
        'count_login_attempt',
        'fio',
        'inn',
        'status',
        'position_id',
        'user_struct_id',
        'is_photo',
        'code_color_fd',
        'mail',
        'root',
        'phone',
        'code_hierarchy',
        'biography',
        'date_birthday',
        'count_doc',
        'address',
        'longitude',
        'latitude',
        'checks_sensor_premises',
        'edit_temp',
        'edit_position',
        'count_click_carousel',
        'off_email_notification',
        'department_hr',
        'lawyer_fields',
        'area_visibility',
        'count_click_profile',
        'position_doc',
        'admin_mode',
        'wallet_balance',
        'wallet_balance_proc',
        'creator_user_id',
        'creator_user_date_system',
        'edit_curator_cfo',
        'access',
        'changed_password',
        'temporary_code',
        'mail_exists',
        'last_activity',
        'type_position',
        'edit_phone',
    ];
    protected $hidden = [
        'password_hash',
        'remember_token',
    ];

   public function users_struct(): BelongsTo
    {
       return $this->belongsTo(UserStruct::class);
    }

}
