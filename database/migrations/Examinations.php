<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Examinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name", 50)->nullable(false)->comment("名称");
            $table->dateTime("start_time")->nullable(false)->comment("考试开始时间");
            $table->dateTime("end_time")->nullable(false)->comment("考试结束时间");
            $table->unsignedInteger("exam_time")->nullable(false)->default(0)->comment("考试时长");
            $table->timestamps();
            $table->index("created_at");
            $table->index("updated_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examinations');
    }
}
