<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsOnCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->foreignId('payment_method_id')->constrained()->after('midtrans_booking_code');
            $table->string('prof_payment')->nullable()->after('payment_method_id');
            $table->integer('discount_id')->nullable()->after('prof_payment');
            $table->integer('discount_total')->nullable()->after('discount_id');
            $table->integer('sub_total')->nullable()->after('discount_total');
            $table->integer('total')->nullable()->after('sub_total');
            $table->integer('total_people')->nullable()->default('1')->after('total');
            $table->date('departured')->nullable()->after('total');
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
            $table->dropColumn(['payment_status','midtrans_url','midtrans_booking_code']);
        });
    }
}
