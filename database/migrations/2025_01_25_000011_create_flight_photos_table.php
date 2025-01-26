
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
        Schema::dropIfExists('flight_photos');
        Schema::create('flight_photos', function (Blueprint $table) {
            
            $table->id('id');
            $table->string('url', 255)->nullable();
            $table->string('features', 255)->nullable();
            $table->unsignedBigInteger('flight_id');

            $table->index(["flight_id"], 'fk_flight_photos_flights1_idx');


            $table->foreign('flight_id')
                ->references('id')->on('flights')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
 Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('flight_photos');
    }
};
