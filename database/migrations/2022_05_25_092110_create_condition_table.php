<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition', function (Blueprint $table) {
            $table->id();
            $table->string("value",100);
            $table->timestamps();
        });

        DB::table('condition')->insert(
            array(
                [
                    'value' => 'EQUAL',
                ],
                [
                    'value' => 'GREATER_THAN',
                ],
                [
                    'value' => 'LESS_THAN',
                ],
                [
                    'value' => 'GREATER_THAN_OR_EQUAL',
                ],
                [
                    'value' => 'LESS_THAN_OR_EQUAL',
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condition');
    }
}
