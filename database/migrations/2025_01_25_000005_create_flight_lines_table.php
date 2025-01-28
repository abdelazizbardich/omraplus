
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
        Schema::dropIfExists('flight_lines');
        Schema::create('flight_lines', function (Blueprint $table) {
            
            $table->id('id');
            $table->string('title', 255)->nullable();
            $table->string('capacity', 255)->nullable();
            $table->timestamps();
        });
 Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('flight_lines');
    }
};
