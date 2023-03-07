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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('value');
            $table->timestamps();
        });

        \App\Models\Config::create([
            'name' => 'site_name',
            'description' => 'Site name',
            'value' => 'Intranet',
        ]);

        \App\Models\Config::create([
            'name' => 'site_description',
            'description' => 'Site description',
            'value' => 'Intranet',
        ]);

        \App\Models\Config::create([
            'name' => 'site_contact_email',
            'description' => 'Site contact email',
            'value' => 'example@example.com',
        ]);

        \App\Models\Config::create([
            'name' => 'site_contact_phone',
            'description' => 'Site contact phone',
            'value' => '0000000000',
        ]);

        \App\Models\Config::create([
            'name' => 'site_contact_admin',
            'description' => 'Site contact admin',
            'value' => 'Admin name',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
