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
        Schema::table('categories', function (Blueprint $table) {
            // Ensure parent_category_id column exists before adding the foreign key
            if (!Schema::hasColumn('categories', 'parent_category_id')) {
                $table->unsignedBigInteger('parent_category_id')->nullable()->after('id');
            }

            // Add foreign key constraint
            $table->foreign('parent_category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['parent_category_id']);
        });
    }
};
