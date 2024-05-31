<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
		$table->id();
		$table->string('first_name');
		$table->string('last_name');
		$table->string('gender');
		$table->string('email');
     		$table->string('tell1', 11);
            $table->string('tell2', 11);
            $table->string('tell3', 11);
     		$table->string('address', 11);
     		$table->string('building', 11);
     		$table->text('content')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}

