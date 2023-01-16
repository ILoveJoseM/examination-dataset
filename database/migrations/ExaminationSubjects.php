<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExaminationSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examination_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger("type")->nullable(false)->default(0)->comment("试卷类型");
            $table->unsignedInteger("examination_id")->nullable(false)->default(0)->comment("考场ID");
            $table->unsignedInteger("subject_id")->nullable(false)->default(0)->comment("科目ID");
            $table->timestamps();
            $table->index("examination_id");
            $table->index("subject_id");
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
        Schema::dropIfExists('examination_subjects');
    }
}
