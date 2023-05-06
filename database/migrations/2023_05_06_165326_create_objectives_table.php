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
        Schema::create('objectives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');

            $table->unsignedBigInteger('category_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('category');

            $table->date('date_start');
            $table->date('date_end');
            $table->string('amount');
            $table->string('cumulative_savings');
            $table->string('progress');

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
        Schema::dropIfExists('objectives');
    }
};
