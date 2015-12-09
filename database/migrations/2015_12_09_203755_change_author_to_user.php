<?php
//It needs to be user_id rather than author_id in the database for Laravel to work its magic. So we'll indulge it.
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAuthorToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("posts",function($table){
            $table->dropForeign('posts_author_id_foreign');
            $table->dropColumn('author_id');
            $table->integer("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users");
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
            $table->dropForeign('posts_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
