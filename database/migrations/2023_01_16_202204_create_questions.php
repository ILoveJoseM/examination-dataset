<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("question_bank_id")->nullable(false)->default(0)->comment("考试-科目ID");
            $table->unsignedTinyInteger("type")->nullable(false)->default(0)->comment("题目类型");
            $table->text("content")->comment("题目");
            $table->text("description")->comment("解析");
            $table->text("options")->comment("选项");
            $table->string("answer", 50)->comment("答案");
            $table->timestamps();
            $table->index("created_at");
            $table->index("updated_at");
            $table->index("question_bank_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
