
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
        Schema::dropIfExists('flights_prices');
        Schema::create('flights_prices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('flights_id');
            $table->unsignedBigInteger('room_types_id');
            $table->unsignedBigInteger('bookings_id');
            $table->string('price', 45)->nullable();
            $table->string('price_two_to_three_p', 45)->nullable();
            $table->string('price_three_to_five_p', 45)->nullable();
            $table->string('price_five_to_eight_p', 45)->nullable();

            $table->index(["room_types_id"], 'fk_flights_has_room_types_room_types1_idx');

            $table->index(["flights_id"], 'fk_flights_has_room_types_flights1_idx');

            $table->index(["bookings_id"], 'fk_flights_prices_bookings1_idx');


            $table->foreign('flights_id')
                ->references('id')->on('flights')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('room_types_id')
                ->references('id')->on('room_types')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('bookings_id')
                ->references('id')->on('bookings')
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
        Schema::dropIfExists('flights_prices');
    }
};
