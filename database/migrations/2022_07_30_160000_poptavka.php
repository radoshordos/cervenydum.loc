<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public const TABLE = 'poptavka';

    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('byt_id');
            $table->string('name', 255)->unique();
            $table->string('surname', 255)->unique();
            $table->string('address', 255)->unique();
            $table->string('email', 255)->unique();
            $table->boolean('agreement');

            $table->foreign('byt_id')->references('id')->on('byt')->onUpdate('cascade')->onDelete('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
