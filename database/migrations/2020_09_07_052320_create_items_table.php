<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('pk_item_id');
            $table->string('item_number');
            $table->string('item_jobtype');
            $table->foreignId('pk_subcategory_id')->constrained();
            $table->string('item_description');
            $table->foreignId('pk_material_id')->constrained();
            $table->double('item_estimatedtime');
            $table->double('item_servicecall');
            $table->tinyInteger('item_archived');
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
        Schema::dropIfExists('items');
    }
}
