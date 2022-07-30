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
            $table->string('montant')->nullable();
            $table->string('montantVire')->nullable();
            $table->string('montantDepot')->nullable();
            $table->string('raison')->nullable();
            $table->string('receveur')->nullable();
            $table->string('support')->nullable();
            $table->string('code1')->nullable();
            $table->string('code2')->nullable();
            $table->string('code3')->nullable();
            $table->string('pending')->nullable();
            $table->string('salary')->nullable();
            $table->string('compagny')->nullable();
            $table->string('temois')->nullable();
            $table->string('temoinsMail1')->nullable();
            $table->string('temoinsPhone1')->nullable();
            $table->string('percentage')->nullable();
            $table->integer('users_id');
            $table->string('author')->nullable();
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
