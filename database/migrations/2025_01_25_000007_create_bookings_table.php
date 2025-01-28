
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
        Schema::dropIfExists('bookings');
        Schema::create('bookings', function (Blueprint $table) {
            
            $table->id('id');
            $table->unsignedBigInteger('hotel_mekka');
            $table->unsignedBigInteger('hotel_medina');
            $table->timestamps();

            $table->index(["hotel_mekka"], 'fk_bookings_hotels1_idx');

            $table->index(["hotel_medina"], 'fk_bookings_hotels2_idx');


            $table->foreign('hotel_mekka')
                ->references('id')->on('hotels')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('hotel_medina')
                ->references('id')->on('hotels')
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
        Schema::dropIfExists('bookings');
    }
};
