<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_log', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->default(0);
            $table->string('method');
            $table->string('device_id');
            $table->string('request_url');
            $table->string('request_params');
            $table->integer('response_code');
            $table->ipAddress('ip');
            $table->timestamps();
            $table->engine = 'Archive';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visit_log');
    }
}
