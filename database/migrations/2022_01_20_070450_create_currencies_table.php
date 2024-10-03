<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('symbol')->nullable();
            $table->string('money_format_thousands')->nullable();
            $table->string('money_format_decimal')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
        DB::table('currencies')->insert([
            [
                'title' => 'Ethiopian Birr',
                'symbol' => 'ብር', // The symbol for Ethiopian Birr
                'money_format_thousands' => ',',
                'money_format_decimal' => '.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'US Dollar',
                'symbol' => '$',
                'money_format_thousands' => ',',
                'money_format_decimal' => '.',
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
        Schema::dropIfExists('currencies');
        DB::table('currencies')->whereIn('title', ['US Dollar', 'Ethiopian Birr'])->delete();
    }
}
