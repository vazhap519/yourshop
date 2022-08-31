<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MegaMenuTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('megamenu', function (Blueprint $table) {
            $table->id();
            $table->string('MegaMenuId')->unique();
            $table->string('mega_menu_name');
            $table->string('mega_menu_name_headers');
            $table->string('mega_menu_subcats');
           
        });
    }


    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('megamenu');
    }
}
