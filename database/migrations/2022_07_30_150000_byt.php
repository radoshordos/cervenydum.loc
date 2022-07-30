<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public const TABLE = 'byt';

    public function up(): void
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->string('value', 255)->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
