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
        Schema::table('users', function (Blueprint $table) {
            // Thêm trường division_id
            $table->unsignedBigInteger('division_id')->nullable()->after('contract_end_date');
            
            // Thêm foreign key
            $table->foreign('division_id')
                  ->references('id')
                  ->on('divisions')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Xóa foreign key
            $table->dropForeign(['division_id']);

            // Xóa trường division_id
            $table->dropColumn('division_id');
        });
    }
};
