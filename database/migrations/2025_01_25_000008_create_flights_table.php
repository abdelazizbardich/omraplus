
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
        Schema::dropIfExists('flights');
        Schema::create('flights', function (Blueprint $table) {
            
            $table->id('id');
            $table->string('title', 45)->nullable();
            $table->string('going_date', 45)->nullable();
            $table->string('return_date', 45)->nullable();
            $table->unsignedBigInteger('flight_going');
            $table->unsignedBigInteger('flight_return');
            $table->string('description', 45)->nullable();

            $table->index(["flight_going"], 'fk_flights_flight_lines1_idx');

            $table->index(["flight_return"], 'fk_flights_flight_lines2_idx');


            $table->foreign('flight_going')
                ->references('id')->on('flight_lines')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('flight_return')
                ->references('id')->on('flight_lines')
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
        Schema::dropIfExists('flights');
    }
};
