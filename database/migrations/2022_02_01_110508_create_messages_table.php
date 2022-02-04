<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('messages', function (Blueprint $table) {
         $table->id();
         $table->text('version')->nullable();
         $table->text('imei')->nullable();
         $table->text('iccid')->nullable();
         $table->text('address')->nullable();
         $table->string('status')->nullable();
         $table->bigInteger('signal')->nullable();
         $table->enum('type', ['ping', 'message', 'login']);
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
      Schema::dropIfExists('messages');
   }
}
