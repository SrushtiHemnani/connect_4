<?php

use App\Enum\ResultType;
use App\Enum\WinnerType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('game_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('winner', [ WinnerType::AI->value, WinnerType::USER->value, WinnerType::DRAW->value ]);
            $table->enum('result', [ ResultType::WIN->value, ResultType::LOSE->value, ResultType::DRAW->value ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_results');
    }
};
