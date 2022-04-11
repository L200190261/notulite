<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrator', function (Blueprint $table) {
            $table->bigIncrements('no');
            $table->bigInteger('id')->NULL();
            $table->bigInteger('nip')->NULL();
            $table->string('nama')->NULL();
            $table->string('username')->NULL();
            $table->string('password')->NULL();
            $table->string('jabatan')->NULL();
            $table->string('instansi')->NULL();
            $table->string('bidang')->NULL();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrator');
    }
}
