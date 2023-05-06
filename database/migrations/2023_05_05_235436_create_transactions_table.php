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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('date');

            $table->unsignedBigInteger('bank_account_id')->nullable()->constrained()->onDelete('cascade')->nullable();
            $table->foreign('bank_account_id')
                ->references('id')
                ->on('bank_accounts');

            $table->unsignedBigInteger('credit_card_id')->nullable()->constrained()->onDelete('cascade')->nullable();
            $table->foreign('credit_card_id')
                ->references('id')
                ->on('credit_cards');

            $table->unsignedBigInteger('category_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('category');

            $table->text('description');
            $table->string('value');
            $table->string('type_transaction');
            $table->string('account_balance');
            $table->text('notes')->nullable();

            $table->unsignedBigInteger('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
