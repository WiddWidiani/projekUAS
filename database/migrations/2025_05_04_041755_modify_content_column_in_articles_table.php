<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyContentColumnInArticlesTable extends Migration
{
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->text('content')->nullable()->change(); // Ubah kolom content menjadi nullable
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->text('content')->nullable(false)->change(); // Kembalikan ke non-nullable jika rollback
        });
    }
}