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
        Schema::create('data', function (Blueprint $table) {
           // $table->id();
           $table->char('ID',6);
           $table->char('NIS',10);
           $table->char('Nama',100);
           $table->char('Asal Sekolah',100);
           $table->date('Tanggal_Lahir',10);
           $table->char('Jenis_Kelamin');
           $table->char('Alamat',100);
           $table->string('Kota',100);
           $table->primary('ID',6);
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
