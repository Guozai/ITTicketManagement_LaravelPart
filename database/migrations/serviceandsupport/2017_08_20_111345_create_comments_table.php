<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            /*
             * Other columns in the table
             */
            $table->text('comment');

            /**
             * Create a column
             *
             * Give a foreign key constraint for the booking id
             *
             * OnDelete will add a constraint by which if the booking is
             * removed then all the addresses associated to
             * the booking will be removed as well
             */
            $table->integer('ticket_id')->unsigned();
            $table->foreign('ticket_id')
                ->references('id')->on('tickets')
                ->onDelete('cascade');

            $table->timestamps();
        });


    }

    /**x
     * Reverse the migrations.
     *
     * @return void
     */

}
