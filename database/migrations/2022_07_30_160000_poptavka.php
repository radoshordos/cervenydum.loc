<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public const TABLE = 'poptavka';

    public function up(): void
    {
        Schema::create(self::TABLE, static function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('byt_id');
            $table->string('name', 255);
            $table->string('surname', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('agreement', 3)->nullable();
            $table->timestampsTz();
            $table->foreign('byt_id')->references('id')->on('byt')->onUpdate('cascade')->onDelete('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
