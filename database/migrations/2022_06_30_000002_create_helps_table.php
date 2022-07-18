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
            $table->string('firstname', 45)->nullable();
            $table->string('lastname', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('adresse', 45)->nullable();
            $table->string('piece', 45)->nullable();
            $table->string('typePiece', 45)->nullable();
            $table->string('montant', 45)->nullable();
            $table->string('raison', 45)->nullable();
            $table->string('profession', 45)->nullable();
            $table->string('birthday', 45)->nullable();
            $table->string('others', 45)->nullable();
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
