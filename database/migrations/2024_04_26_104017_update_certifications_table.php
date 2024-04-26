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
        Schema::table('certifications', function (Blueprint $table) {
            $table->foreign('certification_type_id')
                  ->references('id')
                  ->on('certification_types')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('certifications', function (Blueprint $table) {
            // Xóa foreign key
            $table->dropForeign(['certification_type_id']);
        });
    }
};
