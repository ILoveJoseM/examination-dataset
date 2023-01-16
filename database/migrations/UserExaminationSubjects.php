<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserExaminationSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_examination_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("examination_subject_id")->nullable(false)->default(0)->comment("考试-科目ID");
            $table->unsignedInteger("score")->nullable(false)->default(0)->comment("分值");
            $table->unsignedTinyInteger("status")->nullable(false)->default(0)->comment("状态");
            $table->text("answers")->comment("答案");
            $table->unsignedInteger("uid")->nullable(false)->default(0)->comment("考生ID");
            $table->timestamps();
            $table->index("created_at");
            $table->index("updated_at");
            $table->index("examination_subject_id");
            $table->index("uid");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_examination_subjects');
    }
}
