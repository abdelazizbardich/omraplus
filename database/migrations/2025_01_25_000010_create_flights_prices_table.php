
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
            $table->id();
            $table->unsignedBigInteger('flight_id');
            $table->unsignedBigInteger('room_type_id');
            $table->unsignedBigInteger('booking_id');
            $table->string('price', 255)->nullable();
            $table->string('price_two_to_three_p', 255)->nullable();
            $table->string('price_three_to_five_p', 255)->nullable();
            $table->string('price_five_to_eight_p', 255)->nullable();
            $table->timestamps();

            $table->index(["room_type_id"], 'fk_flights_has_room_types_room_types1_idx');

            $table->index(["flight_id"], 'fk_flights_has_room_types_flights1_idx');

            $table->index(["booking_id"], 'fk_flights_prices_bookings1_idx');


            $table->foreign('flight_id')
                ->references('id')->on('flights')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('room_type_id')
                ->references('id')->on('room_types')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('booking_id')
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
