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
        Schema::create('tbl_trains_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('ユーザID');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('scale_type')->comment('模型タイプID');
            $table->foreign('scale_type')->references('id')->on('mst_modelscale_type');
            $table->string('train_code')->nullable()->comment('車両型式 ユーザごと個人識別用');
            $table->unsignedBigInteger('market_id')->nullable()->comment('市販模型データID');
            $table->foreign('market_id')->references('id')->on('tbl_market_goods');
            $table->date('installation_date')->nullable()->comment('入線日');
            $table->unsignedInteger('installation_price')->nullable()->comment('購入価格');
            $table->boolean('has_motor')->nullable()->comment('モータ有無');
            $table->text('note')->nullable()->comment('備考');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_trains_info');
    }
};
