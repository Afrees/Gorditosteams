<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->string('grade', 20);
            $table->foreignId('barrack_id')->constrained('barracks')->onDelete('cascade');
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->foreignId('corp_id')->constrained('corps')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('soldiers');
    }
};
