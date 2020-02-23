<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurvpractice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->bigIncrements('resultId');
            $table->integer('rating');
            $table->string('comment');
            $table->timestamp('rated_at')->useCurrent();
            $table->string('updated_at', null);
            $table->string('created_at', null);
            $table->unsignedBigInteger('formId');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survpractice');
    }
}
