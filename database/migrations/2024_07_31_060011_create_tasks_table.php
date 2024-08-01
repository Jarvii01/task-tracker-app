<?php

use App\Models\Area;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description');
            $table->timestamp('deadline');
            $table->foreignId('user_id')->constrained('users');
//            $table->foreignId('area_id')->constrained('areas');
            $table->enum('status', ['Выполнено', 'Не выполнено'])
                ->default('Выполнено');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
