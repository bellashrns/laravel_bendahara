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
        Schema::create('bendaharas', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->string('type');
            $table->integer('value')->nullable();
            $table->string('notes')->nullable();
            $table->string("status")
            ->comment('1:pending, 2:accepted', '3:rejected')->default(1);
            $table->date('date');
            $table->string('name');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bendaharas');
    }
};
