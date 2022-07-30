<?php
 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('solde')->nullable();
            $table->string('compteSolde')->nullable();
            $table->string('swift')->nullable();
            $table->string('bic')->nullable();
            $table->string('isActif')->nullable();
            $table->string('profession')->nullable();
            $table->string('adresse')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('others')->nullable();
            $table->string('single')->nullable();
            $table->string('genre')->nullable();
            $table->string('birthday')->nullable();
            $table->string('isAdmin')->nullable();
            $table->string('password')->nullable();
            $table->string('charge')->nullable();
            $table->string('workCompagny')->nullable();
            $table->string('piece')->nullable();
            $table->string('typePiece')->nullable();
            $table->string('typeAccounte')->nullable();

            
            $table->timestamps();

            $table->unique(["email"], 'email_UNIQUE');

            $table->unique(["id"], 'id_UNIQUE');

            $table->unique(["phone"], 'phone_UNIQUE');
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
