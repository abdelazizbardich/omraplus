
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
        Schema::dropIfExists('photo');
        Schema::create('photo', function (Blueprint $table) {
            
            $table->id('id');
            $table->string('url', 45)->nullable();
            $table->string('features', 45)->nullable();
            $table->unsignedBigInteger('hotels_id');

            $table->index(["hotels_id"], 'fk_photo_hotels1_idx');


            $table->foreign('hotels_id')
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
        Schema::dropIfExists('photo');
    }
};
