<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('expense_categories')->insert([
            [
                'name' => 'Food',
                'user_id' => 1, // Replace with appropriate user id
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home Rent',
                'user_id' => 1, // Replace with appropriate user id
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Transport',
                'user_id' => 1, // Replace with appropriate user id
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clothes',
                'user_id' => 1, // Replace with appropriate user id
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Health Care',
                'user_id' => 1, // Replace with appropriate user id
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
        Schema::dropIfExists('expense_categories');
    }
}
