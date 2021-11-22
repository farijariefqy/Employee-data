<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->bigInteger('nip')->nullable()->default(16);
            $table->bigInteger('nik')->nullable()->default(16);
            $table->string('place_of_birth',255)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('date_accepted_work',255)->nullable();
            $table->string('employee_status',255)->nullable();
            $table->string('position',255)->nullable();
            $table->string('department',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('telp')->nullable();
            $table->string('address',255)->nullable();
            $table->string('mariatal_status',255)->nullable();
            $table->string('gender',255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
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
