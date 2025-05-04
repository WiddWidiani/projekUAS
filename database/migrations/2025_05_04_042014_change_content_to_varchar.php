<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeContentToVarchar extends Migration
{
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('content', 1000)->default('')->change(); // Ubah content menjadi VARCHAR dengan default kosong
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->text('content')->change(); // Kembalikan ke TEXT jika rollback
        });
    }
}