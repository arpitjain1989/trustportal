<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancel_class_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->constrained('teacher_class_requests')->cascadeOnDelete();
            $table->unsignedTinyInteger('status_id')->default(0)->comment('1 = accepted, 2 = declined');
            $table->string('reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancel_class_requests');
    }
};
