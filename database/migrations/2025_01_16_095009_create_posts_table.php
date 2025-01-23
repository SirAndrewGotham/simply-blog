<?php

use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Language::class)->nullable()->constrained()->onDelete('SET NULL');
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrained()->onDelete('SET NULL');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable()->default(null)->comment('Summery of the post');
            $table->longText('body');
            $table->string('image')->nullable();
            $table->datetime('published_at')->nullable()->default(null);
            $table->datetime('published_through')->nullable()->default(null);
            $table->unsignedBigInteger('min_to_read')->default(0);
            $table->bigInteger('views')->default(0);
            $table->boolean('allow_comments')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
