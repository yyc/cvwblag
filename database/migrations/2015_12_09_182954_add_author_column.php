<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthorColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("posts",function($table){
            $table->integer("author_id")->unsigned();
            $table->foreign("author_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("posts",function($table){
            $table->dropForeign('author_id');
            $table->dropColumn("author_id");
        });
    }
}
