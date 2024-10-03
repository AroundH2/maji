
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
        Schema::table('survey_responses', function (Blueprint $table) {
        $table->dropForeign(['question_id']);
        $table->foreign('question_id')
          ->references('id')->on('survey_questions')
          ->onDelete('cascade');
        
          });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('survey_responses', function (Blueprint $table) {
        
        // 外部キー制約を解除して元の状態に戻す
        $table->dropForeign(['question_id']);
        /*
        // 必要であれば、カラム自体も削除
        $table->dropColumn('question_id');
        */
        });
        
    }
};
