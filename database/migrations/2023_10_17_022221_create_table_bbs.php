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
        Schema::create('bbses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)->comment('投稿者名');
            $table->string('title', 128)->comment('タイトル');
            $table->text('body')->comment('本文');
            //
            $table->text('user_agent')->comment('ブラウザ名');
            $table->string('from_ip', 128)->comment('接続元IP');
            //　2038年問題対策
            //$table->timestamps();
            $table->datetime('created_at');
            $table->datetime('updated_at');

            //
            $table->comment('掲示板テーブル');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bbses');
    }
};
