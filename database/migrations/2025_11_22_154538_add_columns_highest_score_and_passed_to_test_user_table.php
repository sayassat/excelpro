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
        Schema::table('test_user', function (Blueprint $table) {
            $table->float('highest_score')->nullable()->after('score');
            $table->boolean('passed')->default(false)->after('highest_score');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('test_user', function (Blueprint $table) {
            $table->dropColumn('highest_score');
            $table->dropColumn('passed');
        });
    }
};
