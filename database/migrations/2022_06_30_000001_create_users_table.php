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
            $table->string('username', 45)->nullable();
            $table->string('firstname', 45)->nullable();
            $table->string('lastname', 45)->nullable();
            $table->string('email', 45);
            $table->string('phone', 45)->nullable();
            $table->string('photo')->nullable();
            $table->string('solde', 45)->nullable();
            $table->string('compteSolde', 45)->nullable();
            $table->string('AccountUsercol', 45)->nullable();
            $table->string('swift', 45)->nullable();
            $table->string('bic', 45)->nullable();
            $table->string('isActif', 45)->nullable();
            $table->string('profession', 45)->nullable();
            $table->string('adresse', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('country', 45)->nullable();
            $table->string('others', 45)->nullable();
            $table->string('single', 45)->nullable();
            $table->string('genre', 45)->nullable();
            $table->string('birthday', 45)->nullable();
            $table->string('isAdmin', 45)->nullable();
            $table->string('password', 45)->nullable();
            $table->string('charge', 45)->nullable();
            $table->string('workCompagny', 45)->nullable();
            $table->string('piece')->nullable();
            $table->string('typePiece', 45)->nullable();
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
