<?php

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
        Schema::create('user_structs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_parent');
            $table->string('position');
            $table->integer('status');
            $table->integer('id_buisnes_route')->nullable();
            $table->integer('is_department');
            $table->string('hid');
            $table->integer('department_id');
            $table->integer('register_contacts');
            $table->integer('department_hr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_structs');
    }
};
