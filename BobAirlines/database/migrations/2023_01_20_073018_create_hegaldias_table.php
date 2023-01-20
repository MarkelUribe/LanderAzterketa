<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hegaldias', function (Blueprint $table) {
            $table->id();
            $table->string('irteeraAireportua');
            $table->string('helmugaAireportua');
            $table->timestamp('irteeraEguna');
            $table->string('iraupena');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hegaldias');
    }
};
