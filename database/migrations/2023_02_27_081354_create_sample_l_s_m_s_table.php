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
        Schema::create('sample_l_s_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('book_id')->nullable();
            $table->string('genre');
            $table->string('book_name');
            $table->string('book_author');
            $table->string('pub_date');
            $table->string('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sample_l_s_m_s');
    }
};
