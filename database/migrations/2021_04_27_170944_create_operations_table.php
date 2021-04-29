<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('type_id')->constrained('type_operation');
            $table->foreignId('partner_id')->constrained('partners');
            $table->string('link')->nullable();
            $table->string('target')->nullable();
            $table->string('document')->nullable();
            $table->string('verification')->nullable();
            $table->date('date')->nullable();
            $table->string('number')->nullable();
            $table->date('dating')->nullable();
            $table->decimal('sum', $precision = 12, $scale = 2)->nullable();
            $table->string('purpose')->nullable();
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
        Schema::dropIfExists('operations');
    }
}
