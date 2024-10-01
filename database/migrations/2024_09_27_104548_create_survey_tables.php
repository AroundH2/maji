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
        // 質問を保存するテーブル
        Schema::create('survey_questions', function (Blueprint $table) {
            $table->id();  // 質問のID
            $table->string('question');  // 質問内容
            $table->timestamps();  // 作成日時と更新日時
        });

        // 回答を保存するテーブル
        Schema::create('survey_responses', function (Blueprint $table) {
            $table->id();  // 回答のID
            $table->foreignId('question_id')->constrained('survey_questions');  // 質問ID（外部キー）
            $table->string('response');  // 回答内容
            $table->timestamps();  // 作成日時と更新日時
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_responses');
        Schema::dropIfExists('survey_questions');
    }
};
