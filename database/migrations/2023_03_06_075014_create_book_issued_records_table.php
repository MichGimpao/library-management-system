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
        Schema::create('book_issued_records', function (Blueprint $table) {
            $table->id();
            $table->string('stud_id');
            $table->string('book_id');
            $table->string('bk_title');
            $table->string('stud_name');
            $table->string('no_copies');
            $table->date('release_date');
            $table->date('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_issued_records');
    }
};
