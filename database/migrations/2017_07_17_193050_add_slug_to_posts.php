<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //action= create a varchar column that will beindexed after the body column and name it slug
        Schema::table('posts',function($table){
          $table->string('slug')->unique()->after('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //undo this migration
        Schema::table('posts', function($table){
          $table->dropColumn('slug');
        });
    }
}
