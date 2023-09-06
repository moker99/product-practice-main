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
        Schema::create('message_texts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('text')->nullable()->default('')->comment('子留言');
            $table->bigInteger('message_text_id')->comment('留言ID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_texts');
    }
};
