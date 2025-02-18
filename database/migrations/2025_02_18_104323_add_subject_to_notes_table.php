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
    Schema::table('notes', function (Blueprint $table) {
        $table->text('subject')->after('content'); // Add the subject column
    });
}

public function down(): void
{
    Schema::table('notes', function (Blueprint $table) {
        $table->dropColumn('subject'); // Remove it if rolling back
    });
}
};
