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
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number_card');
            $table->date('date_expiration');
            $table->date('date_limit');
            $table->string('current_balance');
            $table->integer('interest_rate');
            $table->date('cut_off_date');
            $table->date('date_paid');

            $table->unsignedBigInteger('status_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses');

            $table->text('notes')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_cards');
    }
};
