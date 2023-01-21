<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public const TABLE = 'apartment';

    public function up(): void
    {
        Schema::create(self::TABLE, static function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('byt_id');
            $table->string('floor', 24);
            $table->enum('loggia', ['NE', 'ANO']);
            $table->enum('cellar', ['NE', 'ANO']);
            $table->enum('garage', ['NE', 'ANO', 'ANO 1x']);
            $table->decimal('selling_price', 8, 0)->default(15000000);
            $table->enum('selling_status', ['Prodej', 'Nestanovena', 'Rezervováno', 'Prodáno'])->default('Prodej');
            $table->foreign('byt_id')->references('id')->on('byt')->onUpdate('cascade')->onDelete('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(self::TABLE);
    }
};
