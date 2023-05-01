<?php

use App\Models\UsersView;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('password_hash');
            $table->integer('count_login_attempt')->nullable(0);
            $table->string('fio');
            $table->string('inn')->nullable();
            $table->string('status')->nullable(0);
            $table->integer('position_id')->nullable();
            $table->integer('user_struct_id')->nullable(0);
            $table->integer('is_photo')->nullable(0);
            $table->integer('code_color_fd')->nullable(0);
            $table->string('mail')->nullable();
            $table->integer('root')->nullable();
            $table->string('phone')->nullable();
            $table->integer('code_hierarchy')->nullable(0);
            $table->string('biography')->nullable();
            $table->date('date_birthday')->nullable();
            $table->integer('count_doc')->nullable(0);
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('longitude');
            $table->string('latitude');
            $table->integer('checks_sensor_premises')->nullable(0);
            $table->integer('edit_temp')->nullable(0);
            $table->integer('edit_position')->nullable(0);
            $table->integer('count_click_carousel')->nullable(0);
            $table->integer('off_email_notification')->nullable(0);
            $table->integer('department_hr')->nullable(0);
            $table->integer('lawyer_fields')->nullable(0);
            $table->integer('area_visibility')->nullable(0);
            $table->integer('count_click_profile')->nullable(0);
            $table->integer('position_doc')->nullable(0);
            $table->integer('admin_mode')->nullable(0);
            $table->integer('wallet_balance')->nullable(0);
            $table->integer('wallet_balance_proc')->nullable(0);
            $table->integer('creator_user_id')->nullable(0);
            $table->date('creator_user_date_system')->nullable(0);
            $table->integer('edit_curator_cfo')->nullable(0);
            $table->integer('access')->nullable(0);
            $table->integer('changed_password')->nullable(0);
            $table->integer('temporary_code')->nullable(0);
            $table->integer('mail_exists')->nullable(0);
            $table->integer('last_activity')->nullable(0);
            $table->integer('type_position')->nullable(0);
            $table->integer('edit_phone')->nullable(0);
            $table->rememberToken();
            $table->timestamps();
        });
        UsersView::view();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
