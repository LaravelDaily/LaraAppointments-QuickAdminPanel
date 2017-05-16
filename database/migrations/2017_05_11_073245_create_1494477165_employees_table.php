<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1494477165EmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('employees')) {
            Schema::create('employees', function (Blueprint $table) {
                $table->increments('id');
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                
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
        Schema::dropIfExists('employees');
    }
}
