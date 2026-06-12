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
        Schema::table('about_mes', function (Blueprint $table) {
            $table->string('instagram_link')->nullable()->after('link');
            $table->string('linkedin_link')->nullable()->after('instagram_link');
            $table->string('github_link')->nullable()->after('linkedin_link');
            $table->dropColumn('link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_mes', function (Blueprint $table) {
            $table->string('link')->nullable();
            $table->dropColumn(['instagram_link', 'linkedin_link', 'github_link']);
        });
    }
};
