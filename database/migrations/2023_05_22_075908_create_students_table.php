<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->string('provience');
            $table->string('district');
            $table->string('muncipality');
            $table->string('tole');
            $table->string('ward');
            $table->string('phoneno');
            $table->string('citizenship_no')->unique();
            $table->string('email_address');
            $table->enum('driving_license', ['Y', 'N']);
            $table->string('college_name');
            $table->string('location');
            $table->string('start_year');
            $table->string('completion_year');
            $table->string('major');
            $table->string('gname');
            $table->string('grelation');
            $table->string('gaddress');
            $table->string('gphoneno');
            $table->string('gsignature');
            $table->string('rname');
            $table->string('rposition');
            $table->string('rcollegecompany');
            $table->string('rphoneno');
            $table->string('rsignature');
            $table->string('signature');
            $table->string('ppsizephoto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
