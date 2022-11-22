<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicas', function (Blueprint $table) {
            $table->id()->notnull();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->enum('state',['waiting', 'finished','postponed','cancelled','removed'])->nullable();
            $table->timestamp('register_date')->nullable();
            $table->timestamp('finished_date')->nullable();
            $table->timestamp('change_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('practicas');
    }
};
