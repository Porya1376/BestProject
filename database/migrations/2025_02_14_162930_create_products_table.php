<?php

use App\Enums\ProductStatusEnum;
use App\Enums\ProductTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type' , array_column(ProductTypeEnum::cases(), 'value'));
            $table->enum('status' ,array_column(ProductStatusEnum::cases(), 'value'));
            $table->string('creator_user_id');
            $table->string('acceptor_user_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('reject_reason')->nullable();
            $table->text('data');
            $table->dateTime('accpeted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
