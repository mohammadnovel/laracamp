<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCheckoutColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->renameColumn('camp_id', 'tour_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->renameColumn('tour_id', 'camp_id');
        });
    }
}
