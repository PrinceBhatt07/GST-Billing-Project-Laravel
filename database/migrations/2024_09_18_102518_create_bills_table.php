<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer("party_id")->nullable();
            $table->date("invoice_date")->nullable();
            $table->string("invoice_no")->nullable();
            $table->text("item_description")->nullable();
            $table->float("total_amount",10,2)->default(0);
            $table->float("cgst_rate",10,2)->default(0);
            $table->float("sgst_rate",10,2)->default(0);
            $table->float("igst_rate",10,2)->default(0);
            $table->float("cgst_amount",10,2)->default(0);
            $table->float("sgst_amount",10,2)->default(0);
            $table->float("igst_amount",10,2)->default(0);
            $table->float("tax_amount",10,2)->default(0);
            $table->float("net_amount",10,2)->default(0);
            $table->text("declaration")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
