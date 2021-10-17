<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('task_type_id')->constrained()->onUpdate('cascade'); // Через эту строку создатся связь 'название_таблицы_id' (без окончания 's') + каскадное обновление
            $table->foreignId('purpose_id')->constrained()->onUpdate('cascade');
            $table->timestamps();
        });

        // Добавление в таблицу user_task строки с option_id
        // Прописывается тут потому, что таблица user_task создается раньше options и из-за этого возникает ошибка 
        Schema::table('user_tasks', function(Blueprint $table) {
            $table->foreignId('option_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
