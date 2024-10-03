<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('income_categories')->insert([
            [
                'name' => 'Salary',
                'user_id' => 1,  //  by admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Freelancing',
                'user_id' => 1,  //  by admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bonus',
                'user_id' => 1,  // by admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gift',
                'user_id' => 1,  // by admin
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income_categories');
    }
}
