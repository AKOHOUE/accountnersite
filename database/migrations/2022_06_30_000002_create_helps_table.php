<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'helps';

    /**
     * Run the migrations.
     * @table helps
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('piece')->nullable();
            $table->string('typePiece')->nullable();
            $table->string('montant')->nullable();
            $table->string('raison')->nullable();
            $table->string('profession')->nullable();
            $table->string('birthday')->nullable();
            $table->string('country')->nullable();
            $table->string('workCompagny')->nullable();
            $table->string('single')->nullable();
            $table->string('genre')->nullable();
            $table->string('devise')->nullable();
            $table->string('charge')->nullable();
            $table->string('others')->nullable();
            $table->string('delai')->nullable();
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
        Schema::dropIfExists($this->tableName);
    }
}
