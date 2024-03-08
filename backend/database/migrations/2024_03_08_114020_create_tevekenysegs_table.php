<?php

use App\Models\Tevekenyseg;
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
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });

        Tevekenyseg::create([
            'tevekenyseg_nev' => 'blabla',
            'pontszam' => 5
        ]);

        Tevekenyseg::create([
            'tevekenyseg_nev' => 'blabla2',
            'pontszam' => 3
        ]);

        Tevekenyseg::create([
            'tevekenyseg_nev' => 'blabla3',
            'pontszam' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
