<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'comments';

    /**
     * Run the migrations.
     * @table comments
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('author', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('commentaire', 45)->nullable();
            $table->timestamps();
            $table->string('others', 45)->nullable();
            $table->integer('blog_id');
            $table->string('commenter', 45)->nullable();
            $table->index(["blog_id"], 'fk_comments_blog1_idx');


           /*** $table->foreign('blog_id', 'fk_comments_blog1_idx')
                ->references('id')->on('blog')
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
