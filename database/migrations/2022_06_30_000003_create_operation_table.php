<?php
 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'operation';

    /**
     * Run the migrations.
     * @table operation
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('typeOperation')->nullable();
            $table->string('montant', 45)->nullable();
            $table->string('montantVire', 45)->nullable();
            $table->string('montantDepot', 45)->nullable();
            $table->string('raison', 45)->nullable();
            $table->string('receveur', 45)->nullable();
            $table->string('support', 45)->nullable();
            $table->string('code1', 45)->nullable();
            $table->string('code2', 45)->nullable();
            $table->string('code3', 45)->nullable();
            $table->string('pending', 45)->nullable();
            $table->string('salary', 45)->nullable();
            $table->string('compagny', 45)->nullable();
            $table->string('temois')->nullable();
            $table->string('temoinsMail1', 45)->nullable();
            $table->string('temoinsPhone1', 45)->nullable();
            $table->string('percentage', 45)->nullable();
            $table->integer('users_id');
            $table->string('author', 45)->nullable();
            $table->timestamps();
            $table->unique(["id"], 'id_UNIQUE');

            $table->index(["users_id"], 'fk_operation_users_idx');


    /***        $table->foreign('users_id', 'fk_operation_users_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action'); 
                */
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
