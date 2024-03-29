
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->date('publication_date');
        $table->integer('number_of_pages');
        $table->string('publisher');
        $table->text('description');
        $table->timestamps();

    });
}

public function down()
{
    Schema::dropIfExists('books');
}

};

