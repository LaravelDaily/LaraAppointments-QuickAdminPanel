<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1494477642WorkingHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('working_hours')) {
            Schema::create('working_hours', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('employee_id')->unsigned()->nullable();
                $table->foreign('employee_id', '35988_5913eb4a114ec')->references('id')->on('employees')->onDelete('cascade');
                $table->date('date')->nullable();
                $table->time('start_time');
                $table->time('finish_time')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_hours');
    }
}
