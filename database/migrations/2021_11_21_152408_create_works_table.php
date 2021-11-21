<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('des')->nullable();
            $table->string('status')->default('0')->nullable();//1-haonf thanhf, 2-ddax xoas, 0- chwa hoanf thanhf
            $table->string('important')->default('0')->nullable();//1-true, 0-false
            $table->date('due_date')->nullable();
            $table->string('shop_id')->nullable();
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
        Schema::dropIfExists('works');
    }
}
