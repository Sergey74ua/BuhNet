<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->char('inn', 12)->index();
            $table->string('name')->index();
            $table->char('status', 7)->default('New');
            $table->char('taxation', 4)->default('ОСН');
            $table->char('kpp', 9)->nullable();
            $table->char('ogrn', 15)->nullable();
            $table->char('okfs', 2)->nullable();
            $table->char('okved', 6)->nullable();
            $table->char('ifns', 4)->nullable();
            $table->char('okpo', 10)->nullable();
            $table->char('okopf', 5)->nullable();
            $table->char('okogu', 7)->nullable();
            $table->char('oktmo', 11)->nullable();
            $table->char('okato', 11)->nullable();
            $table->char('pfr', 12)->nullable();
            $table->char('fss', 10)->nullable();
            $table->char('bik', 9)->nullable();
            $table->char('account', 20)->nullable();
            $table->char('phone', 15)->nullable();
            $table->date('opening')->nullable();
            $table->string('table_units');
            $table->string('table_operation');
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->string('director')->nullable();
            $table->string('rank')->default('Руководитель');
            $table->string('certificate')->nullable();
            $table->string('address')->nullable();
            $table->string('founder')->nullable();
            $table->string('registrar')->nullable();
            $table->string('logo')->nullable();
            $table->string('photo')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
