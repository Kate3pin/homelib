<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Название книги');
            $table->string('author')->nullable()->comment('Автор');
            $table->string('publication_date')->nullable()->comment('Дата публикации');
            $table->string('publishing')->nullable()->comment('Издательство');
            $table->string('isbn')->nullable()->comment('ISBN');
            $table->text('annotation')->nullable()->comment('Аннотация');
            $table->string('keyword')->nullable()->comment('Ключевые слова');
            $table->boolean('shared')->nullable()->comment('Общая');
            $table->string('file')->comment('Файл');
            $table->string('cover')->nullable()->comment('Обложка');
            $table->integer('series')->nullable()->comment('Серия');
            $table->integer('number')->nullable()->comment('Номер');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
