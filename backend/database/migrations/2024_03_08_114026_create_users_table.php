<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('osztaly_id')->references('osztaly_id')->on('osztalies');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => 'gaspar',
            'password' => '123',
            'email' => 'abc@gmail.com',
            'osztaly_id' => 1
        ]);

        User::create([
            'name' => 'jozsi',
            'password' => '123',
            'email' => 'abcd@gmail.com',
            'osztaly_id' => 2
        ]);

        User::create([
            'name' => 'gazsi',
            'password' => '123',
            'email' => 'abce@gmail.com',
            'osztaly_id' => 3
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
