<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public const TABLE = 'byt';

    public function up(): void
    {
        Schema::create(self::TABLE, static function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->string('name', 64)->unique();
            $table->decimal('useful_area', 5, 1)->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
