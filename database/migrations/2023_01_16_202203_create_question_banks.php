<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionBanks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->null(false)->default("")->comment("名称");
            $table->unsignedInteger("subject_id")->nullable(false)->default(0)->comment("科目ID");
            $table->timestamps();
            $table->index("created_at");
            $table->index("updated_at");
            $table->index("subject_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_banks');
    }
}
