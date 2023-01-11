<?php

use App\Models\Ue;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create((new Ue)->getTable(), static function (Blueprint $table) {
            $table->uuid(Ue::id)->primary();
            $table->string(Ue::name)->nullable();
            $table->timestamp(Ue::time)->nullable();
            $table->timestamp(Ue::time_end)->nullable();
            $table->string(Ue::location)->nullable();
            $table->string(Ue::description)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists((new Ue)->getTable());
    }
};
