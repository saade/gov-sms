<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sim_cards', function (Blueprint $table) {
            $table->ulid('id')->primary(); // This is just because of Dissto's gifted subs
            $table->string('phone_number');
            $table->string('status');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sim_cards');
    }
};
