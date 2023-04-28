<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->date('application_date')->nullable();
            $table->uuid('ref_no');
            $table->string('check_id');
            $table->string('name');
            $table->string('father_name');
            $table->date('dob');
            $table->string('pos')->nullable()->default('');
            $table->text('address');
            $table->string('pincode')->nullable()->default('');
            $table->string('city')->nullable()->default('');
            $table->string('state')->nullable()->default('');
            $table->string('district')->nullable()->default('');
            $table->date('verification_date')->nullable();
            $table->string('file_name');
            $table->enum('status', ['Pending', 'Green', 'Red'])->default('Pending');
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
        Schema::dropIfExists('candidates');
    }
};
