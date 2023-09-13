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
        Schema::create('teacher_class_approvals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('approver_id')->constrained()->cascadeOnDelete();
            $table->foreignId('class_id')->constrained('teacher_class_requests')->cascadeOnDelete();
            $table->unsignedTinyInteger('status_id')->default(1)->comment('1 = draft, 2 = in review, 3 = published, 4 = declined');
            $table->string('reason')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('teacher_class_approvals');
    }
};
