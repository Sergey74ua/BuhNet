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
            $table->char('INN', 12)->index();
            $table->string('name')->index();
            $table->char('status', 7)->default('New');
            $table->char('taxation', 4)->default('ОСН');
            $table->char('KPP', 9)->nullable();
            $table->char('OGRN', 15)->nullable();
            $table->char('OKFS', 2)->nullable();
            $table->char('OKVED', 6)->nullable();
            $table->char('IFNS', 4)->nullable();
            $table->char('OKPO', 10)->nullable();
            $table->char('OKOPF', 5)->nullable();
            $table->char('OKOGU', 7)->nullable();
            $table->char('OKTMO', 11)->nullable();
            $table->char('OKATO', 11)->nullable();
            $table->char('PFR', 12)->nullable();
            $table->char('FSS', 10)->nullable();
            $table->char('bank', 9)->nullable();
            $table->char('account', 20)->nullable();
            $table->char('phone', 15)->nullable();
            $table->date('opening')->nullable();
            $table->string('table_units');
            $table->string('table_operation');
            $table->string('fullname');
            $table->string('email');
            $table->string('director');
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
