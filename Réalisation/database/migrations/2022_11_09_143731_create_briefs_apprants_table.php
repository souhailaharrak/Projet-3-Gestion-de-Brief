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
        Schema::create('briefs_apprants', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("briefs_id");
            $table->unsignedInteger("apprenant_id");
            $table->foreign('apprenant_id')->references('id')->on('apprenant')->onDelete('cascade');
            $table->foreign('briefs_id')->references('id')->on('briefs')->onDelete('cascade');
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
        Schema::dropIfExists('briefs_apprants');
    }
};
