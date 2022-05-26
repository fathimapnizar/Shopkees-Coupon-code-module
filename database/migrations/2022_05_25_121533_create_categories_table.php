<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('categories')) {
          Schema::create('categories', function (Blueprint $table) {
                $table->id();
                $table->string("name",100);
                $table->string("status",100);
                $table->timestamps();
            });
        }

        DB::table('categories')->insert(
            array(
                [
                    'name' => 'Mobile Phones',
                    'status' => 1
                ],
                [
                    'name' => 'Laptops',
                    'status' => 1
                ],
                [
                    'name' => 'Television',
                    'status' => 1
                ],
                [
                    'name' => 'Radio',
                    'status' => 1
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
        Schema::dropIfExists('categories');
    }
}
