<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Papers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("examination_subject_id")->nullable(false)->default(0)->comment("试卷ID");
            $table->timestamps();
            $table->index("created_at");
            $table->index("updated_at");
            $table->index("examination_subject_id");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers');
    }
}
