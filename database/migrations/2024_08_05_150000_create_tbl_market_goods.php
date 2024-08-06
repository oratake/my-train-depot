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
        Schema::create('tbl_market_goods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manufacturer_id')->comment('模型メーカID');
            $table->foreign('manufacturer_id')->references('id')->on('mst_manufacturer');
            $table->string('manufacturing_code')->comment('品番');
            $table->string('carrier_name')->comment('運営事業者');
            $table->string('vehicle_model')->nullable()->comment('車両型式名');
            $table->string('vehicle_name')->nullable()->comment('車両名');
            $table->text('note')->nullable()->comment('備考');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_market_goods');
    }
};
