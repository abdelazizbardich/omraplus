
<?php
        /**
     *namespace Database\Migrations;
     */


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class  extends Migration
{
        /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('hotels');
        Schema::create('hotels', function (Blueprint $table) {
            
            $table->id('id');
            $table->string('name', 45)->nullable();
            $table->string('distance_from_mekkah', 45)->nullable();
            $table->string('localisation', 45)->nullable();
            $table->integer('hotel_photos_id');
        });
 Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
};
